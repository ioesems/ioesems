#!/usr/bin/env bash
# json_to_subjects_php.sh
# subjects.json -> subjects.php
# Uses jq if present, otherwise a conservative awk fallback.
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
JSON_FILE="$SCRIPT_DIR/subjects.json"
OUT_PHP="$SCRIPT_DIR/subjects.php"
BACKUP="$OUT_PHP.bak"
FILTER_SEM="${FILTER_SEM:-}"   # optional: export FILTER_SEM=3

if [ ! -f "$JSON_FILE" ]; then
  echo "Error: $JSON_FILE not found. Create it first." >&2
  exit 1
fi

# backup existing output
if [ -f "$OUT_PHP" ]; then
  echo "Backing up existing $OUT_PHP -> $BACKUP"
  cp -a "$OUT_PHP" "$BACKUP"
fi

TMP=$(mktemp /tmp/subjects_lines.XXXXXX)
trap 'rm -f "$TMP"' EXIT

# Produce lines of "sem<SEP>subject" into $TMP
SEP=$'\x01'   # ASCII unit separator (safe)
if command -v jq >/dev/null 2>&1; then
  echo "Using jq to parse JSON."
  if [ -n "$FILTER_SEM" ]; then
    jq -r --arg fs "$FILTER_SEM" '
      to_entries
      | map(select((.key|tostring) == $fs))
      | .[]
      | (.key|tostring) + "'"$SEP"'" + (.value[]|tostring)
    ' "$JSON_FILE" > "$TMP"
  else
    jq -r '
      to_entries
      | .[]
      | (.key|tostring) + "'"$SEP"'" + (.value[]|tostring)
    ' "$JSON_FILE" > "$TMP"
  fi
else
  echo "jq not found — using awk fallback (less robust for very weird JSON)."
  awk -v SEP="$SEP" '
    BEGIN { in_array=0; sem="" }
    {
      gsub(/\r/,"")            # normalize CRLF
      # detect "number": [
      if (match($0, /^[[:space:]]*"*([0-9]+)"*[[:space:]]*:[[:space:]]*\[/, m)) {
        sem = m[1]; in_array = 1; next
      }
      if (in_array==0) next
      line = $0
      # extract quoted strings allowing escaped chars (basic)
      while (match(line, /"([^"\\]|\\.)*"/)) {
        s = substr(line, RSTART, RLENGTH)
        # strip surrounding double quotes
        s = substr(s, 2, length(s)-2)
        # print sem<SEP>subject
        printf("%s%s%s\n", sem, SEP, s)
        line = substr(line, RSTART + RLENGTH)
      }
      if (index($0, "]") > 0) { in_array = 0 }
    }
  ' "$JSON_FILE" > "$TMP"
fi

# Build PHP file
OUT_TMP="$(mktemp /tmp/subjects_php.XXXXXX)"
{
  echo "<?php"
  echo ""
  echo "\$subjects = ["
  current=""
  first_sem=1

  while IFS= read -r ln || [ -n "$ln" ]; do
    # split by SEP
    sem="${ln%%$SEP*}"
    subj="${ln#*$SEP}"

    # optional filtering (redundant if jq already filtered)
    if [ -n "$FILTER_SEM" ] && [ "$FILTER_SEM" != "$sem" ]; then
      continue
    fi

    if [ -z "$current" ] || [ "$current" != "$sem" ]; then
      # close previous sem block
      if [ -n "$current" ]; then
        echo "    ],"
      fi
      printf '    %s => [' "$sem"
      echo ""
      current="$sem"
      first_sem=0
    fi

    # escape for PHP single-quoted string: escape backslash and single-quote
    esc=$(printf '%s' "$subj" | sed -e "s/\\\\/\\\\\\\\/g" -e "s/'/\\\\'/g")
    printf "        '%s',\n" "$esc"
  done < "$TMP"

  # close last sem (if any)
  if [ -n "$current" ]; then
    echo "    ]"
  fi

  echo "];"
  echo ""
  echo "?>"
} > "$OUT_TMP"

# move into place (atomic)
mv "$OUT_TMP" "$OUT_PHP"
echo "Wrote $OUT_PHP (backup kept as $BACKUP if it existed)"
