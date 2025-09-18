#!/usr/bin/env bash
# json_to_subjects_php.sh
# Pure-bash converter: subjects.json -> subjects.php
# NOTE: This simple converter assumes subject names DO NOT contain
# embedded unescaped double-quotes or backslashes. If your data may
# contain those, use the python version below.

set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
JSON_FILE="$SCRIPT_DIR/subjects.json"
OUT_PHP="$SCRIPT_DIR/subjects.php"
BACKUP="$OUT_PHP.bak"
FILTER_SEM="${FILTER_SEM:-}"

if [ ! -f "$JSON_FILE" ]; then
  echo "Error: $JSON_FILE not found. Create it first." >&2
  exit 1
fi

# create backup if subjects.php exists
if [ -f "$OUT_PHP" ]; then
  echo "Backing up existing $OUT_PHP -> $BACKUP"
  cp -a "$OUT_PHP" "$BACKUP"
fi

# We'll parse the simple JSON produced earlier. Lines will be sem|subject
tr -d '\r' < "$JSON_FILE" \
| awk '
BEGIN { in_array=0; sem="" }
{
  line = $0
  # detect "number": [
  if (match(line, /^[[:space:]]*"*([0-9]+)"*[[:space:]]*:[[:space:]]*\[/, m)) {
    sem = m[1]
    in_array = 1
    sub(/^[^[]*\[/,"",line)
    print sem "||START"
  } else if (in_array==0) {
    next
  }
  if (in_array==1) {
    tmp = line
    # extract double-quoted strings (simple)
    while (match(tmp, /"([^"]*)"/, q)) {
      print sem "|" q[1]
      tmp = substr(tmp, RSTART + RLENGTH)
    }
    # if closing bracket, end array
    if (index(line, "]") > 0) {
      in_array = 0
      print sem "||END"
    }
  }
}
' \
> /tmp/_json_lines.$$


# Build PHP file
{
  echo "<?php"
  echo ""
  echo "\$subjects = ["
  current=""
  first_sem=1
  # read temporary parse lines
  while IFS= read -r ln; do
    # START marker maybe printed for inline arrays - ignore if undesired
    if printf '%s' "$ln" | grep -q '||START'; then
      sem="${ln%%||*}"
      # new semester head
      if [ "$first_sem" -eq 0 ]; then
        echo "    ],"
      fi
      printf '    %s => [\n' "$sem"
      current="$sem"
      first_sem=0
      continue
    fi

    if printf '%s' "$ln" | grep -q '||END'; then
      # close current sem
      echo "    ],"
      current=""
      continue
    fi

    sem="${ln%%|*}"
    subj="${ln#*|}"
    # if current not set or sem changed, start a new array block
    if [ -z "$current" ] || [ "$current" != "$sem" ]; then
      if [ "$first_sem" -eq 0 ] && [ -n "$current" ]; then
        echo "    ],"
      fi
      printf '    %s => [\n' "$sem"
      current="$sem"
      first_sem=0
    fi

    # optionally filter sem
    if [ -n "$FILTER_SEM" ] && [ "$FILTER_SEM" != "$sem" ]; then
      continue
    fi

    # Escape backslashes and double quotes for PHP double-quoted string (basic)
    esc=$(printf '%s' "$subj" | sed -e 's/\\/\\\\/g' -e 's/"/\\"/g')
    printf '        "%s",\n' "$esc"
  done < /tmp/_json_lines.$$

  # close last sem (if open)
  echo "    ]"
  echo "];"
  echo ""
  echo "?>"
} > "$OUT_PHP.tmp"

mv "$OUT_PHP.tmp" "$OUT_PHP"
rm -f /tmp/_json_lines.$$
echo "Wrote $OUT_PHP (backup kept as $BACKUP if it existed)"
