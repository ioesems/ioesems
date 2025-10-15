#!/bin/bash

# Base directory
BASE_DIR="note-organizer"

# Create main directory
mkdir -p "$BASE_DIR"

# Create main files
touch "$BASE_DIR/index.html" "$BASE_DIR/style.css" "$BASE_DIR/script.js"

# Create subdirectories and their files
mkdir -p "$BASE_DIR/db"
touch "$BASE_DIR/db/notes.sql"

mkdir -p "$BASE_DIR/includes"
touch "$BASE_DIR/includes/db.php" "$BASE_DIR/includes/functions.php"

mkdir -p "$BASE_DIR/api"
touch "$BASE_DIR/api/folders.php" "$BASE_DIR/api/notes.php" "$BASE_DIR/api/search.php"

mkdir -p "$BASE_DIR/assets/icons"
touch "$BASE_DIR/assets/icons/folder.svg" \
      "$BASE_DIR/assets/icons/note.svg" \
      "$BASE_DIR/assets/icons/search.svg" \
      "$BASE_DIR/assets/icons/plus.svg" \
      "$BASE_DIR/assets/icons/tab.svg"

echo "Directory structure for '$BASE_DIR' created successfully!"
