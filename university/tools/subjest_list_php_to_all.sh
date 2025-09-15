#!/usr/bin/env bash
# build_from_subjects_php.sh
# Parse subjects.php and create bct/sem*/<subject>/materials files.
# No php/python required. CRLF-safe.
#
# Optional:
#   --write-json     write subjects.json (same dir) in addition to creating files
#   FILTER_SEM=N     environment variable to restrict to a single semester

set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
SUBJECTS_PHP="$SCRIPT_DIR/subjects.php"
WRITE_JSON=0
FILTER_SEM="${FILTER_SEM:-}"

# parse args (only checks for --write-json)
for arg in "$@"; do
  case "$arg" in
    --write-json) WRITE_JSON=1 ;;
    --help|-h)
      cat <<USAGE
Usage: bash ./build_from_subjects_php.sh [--write-json]
Environment:
  FILTER_SEM=N    restrict processing to semester N
Options:
  --write-json    also produce subjects.json in the same directory
USAGE
      exit 0
      ;;
    *) echo "Unknown arg: $arg" >&2; exit 1 ;;
  esac
done

if [ ! -f "$SUBJECTS_PHP" ]; then
  echo "Error: subjects.php not found in $SCRIPT_DIR" >&2
  exit 1
fi

# temp files
LINES_TMP="$(mktemp)"
JSON_TMP="$(mktemp)"

cleanup() {
  rm -f "$LINES_TMP" "$JSON_TMP"
}
trap cleanup EXIT

# Step 1: parse subjects.php -> lines of "sem|subject"
# Uses awk reading the CRLF-normalized input. Matches:
#   <number> => [  ... "Subject A", 'Subject B', ... ]
# Supports inline arrays and multiline arrays.
tr -d '\r' < "$SUBJECTS_PHP" \
| awk '
BEGIN { in_array=0; sem="" }
{
  line=$0
  # Detect start: number => [
  if (match(line, /^[[:space:]]*([0-9]+)[[:space:]]*=>[[:space:]]*\[/, m)) {
    sem = m[1]
    in_array = 1
    sub(/^[^[]*\[/, "", line)    # keep only after the first [
  } else if (in_array==0) {
    next
  }
  if (in_array==1) {
    tmp = line
    # extract double-quoted strings
    while (match(tmp, /"([^"]*)"/, q)) {
      print sem "|" q[1]
      tmp = substr(tmp, RSTART + RLENGTH)
    }
    # extract single-quoted strings
    while (match(tmp, /'\''([^'\'']*)'\''/, q)) {
      print sem "|" q[1]
      tmp = substr(tmp, RSTART + RLENGTH)
    }
    # if closing bracket found, leave array context
    if (index(line, "]") > 0) {
      in_array = 0
      sem = ""
    }
  }
}
' > "$LINES_TMP"

# If no lines produced, probably file format differs
if [ ! -s "$LINES_TMP" ]; then
  echo "Warning: no subjects found. Check subjects.php format." >&2
  exit 1
fi

# Step 2: optionally build JSON from the parsed lines (safe handling of quotes/backslashes)
# Build JSON only if requested (but we still proceed to creation even if not requested).
if [ "$WRITE_JSON" -eq 1 ]; then
  awk -F'|' '
  {
    k=$1; v=$2
    # escape backslashes and double quotes
    gsub(/\\/,"\\\\\\", v)
    gsub(/"/,"\\\"", v)
    cnt[k]++
    vals[k, cnt[k]] = v
    if (!seen[k]++) { order[++n] = k }
  }
  END {
    print "{"
    for (i=1;i<=n;i++) {
      k = order[i]
      printf("  \"%s\": [", k)
      for (j=1;j<=cnt[k]; j++) {
        printf("\"%s\"", vals[k,j])
        if (j<cnt[k]) printf(",")
      }
      printf("]")
      if (i<n) printf(",\n"); else printf("\n")
    }
    print "}"
  }
  ' "$LINES_TMP" > "$JSON_TMP"
  mv "$JSON_TMP" "$SCRIPT_DIR/subjects.json"
  echo "Wrote: $SCRIPT_DIR/subjects.json"
fi

# ---------- helper to create files ----------
create_php_file() {
  local filepath="$1"
  local title="$2"
  if [ -e "$filepath" ]; then
    printf '%s\n' "// Note: $filepath already exists" > "${filepath}.exists.info"
    printf 'Skipped (exists): %s\n' "$filepath"
    return 0
  fi
  mkdir -p "$(dirname "$filepath")"
  cat > "$filepath" <<EOF
<?php
/**
 * $title
 * Created: $(date +"%Y-%m-%d")
 * Location: $filepath
 */
 
// TODO: add content for $title

?>
EOF
  printf 'Created: %s\n' "$filepath"
}

create_subject_structure() {
  local SEM="$1"; shift
  local SUBJECT_RAW="$*"

  # optional filter
  if [ -n "$FILTER_SEM" ] && [ "$FILTER_SEM" != "$SEM" ]; then
    return 0
  fi

  case "$SEM" in
    ''|*[!0-9]*)
      printf '%s\n' "Warning: skipping invalid semester: $SEM" >&2
      return 1
      ;;
  esac

  # normalize subject name
  local SUBJECT_CLEAN
  SUBJECT_CLEAN=$(printf '%s' "$SUBJECT_RAW" \
    | tr '[:upper:]' '[:lower:]' \
    | sed -E 's/[^a-z0-9 _-]/ /g' \
    | sed -E 's/[[:space:]]+/_/g' \
    | sed -E 's/_+/_/g' \
    | sed -E 's/^_+|_+$//g')

  if [ -z "$SUBJECT_CLEAN" ]; then
    printf '%s\n' "Warning: subject name empty after normalization: '$SUBJECT_RAW' (sem $SEM)" >&2
    return 1
  fi

  local BASE_DIR="$SCRIPT_DIR/bct"
  local SEM_DIR="$BASE_DIR/sem${SEM}"
  local SUBJ_DIR="$SEM_DIR/$SUBJECT_CLEAN"
  local MATERIALS_DIR="$SUBJ_DIR/materials"

  mkdir -p "$MATERIALS_DIR"

  # files to create
  local files
  files="detailed_note.php
short_note.php
question_list.php
question_with_solution.php
pyq_collection.php
pyq_with_solution.php
syllabus.php
lab_reports.php"

  while IFS= read -r f; do
    create_php_file "$MATERIALS_DIR/$f" "${SUBJECT_CLEAN} / ${f%.*}"
  done <<EOF
$files
EOF

  local PAGE_FILENAME="${SUBJECT_CLEAN}_page.php"
  local PAGE_PATH="$SUBJ_DIR/$PAGE_FILENAME"

  if [ -e "$PAGE_PATH" ]; then
    printf '%s\n' "// Note: $PAGE_PATH already exists" > "${PAGE_PATH}.exists.info"
    printf 'Skipped (exists): %s\n' "$PAGE_PATH"
  else
    cat > "$PAGE_PATH" <<EOF
<?php
\$subjectName = "${SUBJECT_RAW}";

\$resources = [
    'notes' => [
        'Detailed Notes' => 'materials/detailed_note.php',
        'Short Notes' => 'materials/short_note.php'
    ],
    'questions' => [
        'Question List' => 'materials/question_list.php',
        'Questions with Solutions' => 'materials/question_with_solution.php'
    ],
    'pyq' => [
        'PYQ Collection' => 'materials/pyq_collection.php',
        'PYQ with Solutions' => 'materials/pyq_with_solution.php'
    ],
    'additional' => [
        'Syllabus' => 'materials/syllabus.php',
        'Lab Reports' => 'materials/lab_reports.php'
    ]
];

include '../../../../layouts/sub.php';
?>
EOF
    printf 'Created: %s\n' "$PAGE_PATH"
  fi

  printf 'Done for: sem=%s subject=%s\n' "$SEM" "$SUBJECT_RAW"
}

# Step 3: iterate parsed lines and create structure
while IFS='|' read -r sem subj; do
  # skip empties
  if [ -z "${sem:-}" ] || [ -z "${subj:-}" ]; then
    continue
  fi
  printf '\nProcessing: sem=%s subject=%s\n' "$sem" "$subj"
  create_subject_structure "$sem" "$subj" || printf 'Failed: sem=%s subject=%s\n' "$sem" "$subj"
done < "$LINES_TMP"

echo
echo "All done. Created structure under: $SCRIPT_DIR/bct"
