#!/usr/bin/env bash
# create_from_json_no_py.sh
# Pure-bash creator: reads subjects.json and creates bct/sem*/<subject>/materials files.
# Usage:
#   bash ./create_from_json_no_py.sh
# Optional: FILTER_SEM=5 bash ./create_from_json_no_py.sh

set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
JSON_FILE="$SCRIPT_DIR/subjects.json"
FILTER_SEM="${FILTER_SEM:-}"

if [ ! -f "$JSON_FILE" ]; then
  echo "Error: subjects.json not found in $SCRIPT_DIR — run the converter first." >&2
  exit 1
fi

# Helpers
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
  local SEM="$1"
  shift
  local SUBJECT_RAW="$*"

  # optional filter
  if [ -n "$FILTER_SEM" ] && [ "$FILTER_SEM" != "$SEM" ]; then
    return 0
  fi

  # validate sem (digits only)
  if ! printf '%s' "$SEM" | grep -qE '^[0-9]+$'; then
    printf '%s\n' "Warning: skipping invalid semester: $SEM" >&2
    return 1
  fi

  # normalize subject: lower-case, remove unsafe chars, convert spaces to underscores
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

  # material files
  local materials_files
  materials_files="detailed_note.php
short_note.php
question_list.php
question_with_solution.php
pyq_collection.php
pyq_with_solution.php
syllabus.php
lab_reports.php"

  # create each
  while IFS= read -r f; do
    create_php_file "$MATERIALS_DIR/$f" "${SUBJECT_CLEAN} / ${f%.*}"
  done <<EOF
$materials_files
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

# --------- Parse the subjects.json produced by your converter ----------
# Expected JSON shape:
# { "1": ["A","B"], "2": ["C","D"] }
# This parser is lightweight: it extracts numeric keys and quoted strings inside arrays.
# It tolerates whitespace and simple formatting, but it does not fully implement JSON spec.

tr -d '\r' < "$JSON_FILE" \
| awk '
  BEGIN { in_array=0; sem=""; }
  {
    line = $0
    # detect "number": [ ...  (allow spaces)
    if (match(line, /^[[:space:]]*\"?([0-9]+)\"?[[:space:]]*:[[:space:]]*\[/, m)) {
      sem = m[1]
      in_array = 1
      # keep remainder after first [
      sub(/^[^[]*\[/, "", line)
    } else if (in_array==0) {
      next
    }
    if (in_array==1) {
      # find quoted strings (double quotes)
      while (match(line, /"([^"]*)"/, q)) {
        printf("%s|%s\n", sem, q[1])
        # remove through matched part
        line = substr(line, RSTART + RLENGTH)
      }
      # if closing bracket found, end array
      if (index(line, "]") > 0) {
        in_array = 0
        sem = ""
      }
    }
  }
' \
| while IFS='|' read -r sem subj; do
    # skip blanks
    if [ -z "${sem:-}" ] || [ -z "${subj:-}" ]; then
      continue
    fi
    printf '\nProcessing: sem=%s subject=%s\n' "$sem" "$subj"
    create_subject_structure "$sem" "$subj" || printf 'Failed: sem=%s subject=%s\n' "$sem" "$subj"
  done

printf '\nAll done. Created structure under: %s/bct\n' "$SCRIPT_DIR"
