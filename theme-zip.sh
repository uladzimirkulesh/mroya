#!/bin/bash

# Get theme name from package.json
THEME_NAME=$(jq -r '.name' package.json)
ZIP_FILE="${THEME_NAME}.zip"

# Check Git is installed
if ! command -v git &>/dev/null; then
  echo "Error: Git is not installed."
  exit 1
fi

# Check that current directory is a Git repository
if [ ! -d ".git" ]; then
  echo "Error: Current directory is not a Git repository."
  exit 1
fi

# Remove old archive if it exists
rm -f "$ZIP_FILE"

# Get a list of all committed files
ALL_FILES=$(git ls-files)

# Get a list of files that will actually be exported (respects .gitattributes)
EXPORT_FILES=$(git archive --format=tar --prefix="${THEME_NAME}/" HEAD | tar -tf -)

# Create the zip archive
git archive \
  --format=zip \
  --output="$ZIP_FILE" \
  --prefix="${THEME_NAME}/" \
  HEAD

# Check if archive was created successfully
if [ $? -eq 0 ]; then
  echo "✅ Created $ZIP_FILE successfully!"
else
  echo "❌ Failed to create zip."
  exit 1
fi
