#!/usr/bin/env bash
# convert_subjects_to_json.sh
# Pure-bash converter: subjects.php -> subjects.json
# Assumes subjects.php uses the same structure you posted (numbers => [ "Name", "Name", ... ])
# Usage: ./convert_subjects_to_json.sh

set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
SUBJECTS_PHP="$SCRIPT_DIR/subjects.php"
OUT_JSON="$SCRIPT_DIR/subjects.json"

if [ ! -f "$SUBJECTS_PHP" ]; then
  echo "Error: subjects.php not found in $SCRIPT_DIR" >&2
  exit 1
fi

# Parser: outputs lines "sem|subject"
parse_subjects_to_lines() {
  # remove CR for Windows CRLFs
  tr -d '\r' < "$SUBJECTS_PHP" | \
  awk '
    BEGIN { in_array=0; current_sem=""; }
    {
      line = $0
      # detect "N => [" start
      if (match(line, /^[[:space:]]*([0-9]+)[[:space:]]*=>[[:space:]]*\[/, m)) {
        current_sem = m[1]
        in_array = 1
        # keep only remainder after first "[" to catch inline entries
        sub(/^[^[]*\[/, "", line)
      } else if (in_array==0) {
        next
      }
      if (in_array==1) {
        # extract quoted strings (double or single)
        while (match(line, /[\"\x27]([^\"\x27]*)[\"\x27]/, q)) {
          subj = q[1]
          # print sem|subject
          gsub(/\n/, " ", subj)
          print current_sem "|" subj
          # remove up to and including this quoted match
          line = substr(line, RSTART + RLENGTH)
        }
        # if this line contains closing bracket, we exit array mode
        if (index(line, "]") > 0) { in_array = 0; current_sem = "" }
      }
    }
  '
}

# Collect lines, escape JSON characters, build JSON with awk preserving insertion order
{
  # produce sem|subject lines
  parse_subjects_to_lines
} | while IFS='|' read -r sem subj; do
    # escape backslash and double quotes for JSON value
    esc=$(printf '%s' "$subj" | sed -e 's/\\/\\\\/g' -e 's/"/\\"/g')
    printf '%s|%s\n' "$sem" "$esc"
  done \
  | awk -F'|' '
    {
      if (!($1 in arr)) {
        order[++count] = $1
        arr[$1] = "\"" $2 "\""
      } else {
        arr[$1] = arr[$1] "," "\"" $2 "\""
      }
    }
    END {
      print "{"
      for (i=1; i<=count; i++) {
        k = order[i]
        printf "  \"%s\": [%s]", k, arr[k]
        if (i < count) print ","; else print ""
      }
      print "}"
    }
  ' > "$OUT_JSON.tmp"

# Pretty-ish (one-line arrays are fine). Move to final file.
mv "$OUT_JSON.tmp" "$OUT_JSON"
echo "Wrote $OUT_JSON"
