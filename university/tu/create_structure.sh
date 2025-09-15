#!/usr/bin/env bash
# create_structure.sh
# Usage:
#   ./create_structure.sh <sem> "<subject name>"
# or run without args and it will prompt.

set -euo pipefail

# ---------- get inputs ----------
if [ $# -ge 2 ]; then
  SEM="$1"
  shift
  SUBJECT_RAW="$*"
else
  read -rp "Enter semester number (integer): " SEM
  read -rp "Enter subject name (e.g. Communication English): " SUBJECT_RAW
fi

# ---------- validate sem ----------
if ! [[ "$SEM" =~ ^[0-9]+$ ]]; then
  echo "Error: semester must be an integer." >&2
  exit 1
fi

# ---------- normalize subject ----------
# lower-case, remove unsafe chars, convert spaces to underscores
SUBJECT_CLEAN=$(echo "$SUBJECT_RAW" \
  | tr '[:upper:]' '[:lower:]' \
  | sed -E 's/[^a-z0-9 _-]/ /g' \
  | sed -E 's/[[:space:]]+/_/g' \
  | sed -E 's/_+/_/g' \
  | sed -E 's/^_+|_+$//g')

if [ -z "$SUBJECT_CLEAN" ]; then
  echo "Error: subject name became empty after normalization." >&2
  exit 1
fi

# ---------- paths ----------
BASE_DIR="./bct"
SEM_DIR="$BASE_DIR/sem${SEM}"
SUBJ_DIR="$SEM_DIR/$SUBJECT_CLEAN"
MATERIALS_DIR="$SUBJ_DIR/materials"

# ---------- create directories ----------
mkdir -p "$MATERIALS_DIR"

# ---------- files to create in materials ----------
declare -a materials_files=(
  "detailed_note.php"
  "short_note.php"
  "question_list.php"
  "question_with_solution.php"
  "pyq_collection.php"
  "pyq_with_solution.php"
  "syllabus.php"
  "lab_reports.php"
)

# ---------- helper to create a php file with small boilerplate ----------
create_php_file() {
  local filepath="$1"
  local title="$2"
  if [ -e "$filepath" ]; then
    echo "// Note: $filepath already exists" > "${filepath}.exists.info"
    echo "Skipped (exists): $filepath"
    return
  fi

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

  echo "Created: $filepath"
}

# ---------- create material files ----------
for f in "${materials_files[@]}"; do
  create_php_file "$MATERIALS_DIR/$f" "${SUBJECT_CLEAN} / ${f%.*}"
done

# ---------- create subject page at subject root with $subjectName and $resources pointing to local files ----------
PAGE_FILENAME="${SUBJECT_CLEAN}_page.php"
PAGE_PATH="$SUBJ_DIR/$PAGE_FILENAME"

if [ -e "$PAGE_PATH" ]; then
  echo "// Note: $PAGE_PATH already exists" > "${PAGE_PATH}.exists.info"
  echo "Skipped (exists): $PAGE_PATH"
else
  # Use escaped $ to write PHP variables literally while still inserting SUBJECT_RAW
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

  echo "Created: $PAGE_PATH"
fi

echo
echo "Done. Structure created under: $SUBJ_DIR"
