#!/bin/bash

# Navigate to your project directory
REPO_DIR="/c/xampp/htdocs/std"

cd "$REPO_DIR" || { echo "Error: Repository directory not found!"; exit 1; }

# Ensure workflow file is correct before committing
WORKFLOW_FILE=".github/workflows/main.yml"

if [ -f "$WORKFLOW_FILE" ]; then
    echo "Checking workflow file for invalid ftp:// prefix..."
    sed -i 's|ftp://ftpupload.net|ftpupload.net|g' "$WORKFLOW_FILE"
    echo "✅ FTP server line fixed in workflow file."
else
    echo "⚠️ Warning: Workflow file not found at $WORKFLOW_FILE"
fi

# Ask user for commit message
read -p "Enter commit message: " COMMIT_MSG

# Check if the user entered something
if [ -z "$COMMIT_MSG" ]; then
    echo "Error: Commit message cannot be empty!"
    exit 1
fi

echo "Pulling latest changes from remote..."
git pull origin main --allow-unrelated-histories

echo "Adding all changes..."
git add .

echo "Committing changes..."
git commit -m "$COMMIT_MSG"

echo "Pushing to remote..."
git push -u origin main

echo "✅ Git sync complete!"
