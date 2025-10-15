#!/bin/bash

REPO_DIR="/c/xampp/htdocs/std"
cd "$REPO_DIR" || { echo "Error: Repository directory not found!"; exit 1; }

WORKFLOW_FILE=".github/workflows/deploy.yml"

# Verify no ftp:// prefix
if grep -q "ftp://" "$WORKFLOW_FILE"; then
    echo "❌ Found invalid 'ftp://' prefix in workflow. Fixing..."
    sed -i 's|ftp://||g' "$WORKFLOW_FILE"
else
    echo "✅ Workflow looks clean (no ftp:// prefix)."
fi

read -p "Enter commit message: " COMMIT_MSG
if [ -z "$COMMIT_MSG" ]; then
    echo "Error: Commit message cannot be empty!"
    exit 1
fi

git pull origin main --allow-unrelated-histories
git add .
git commit -m "$COMMIT_MSG"
git push -u origin main

echo "✅ Git sync complete!"
