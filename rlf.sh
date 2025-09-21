#!/bin/bash
# =============================================
# Bash script to activate the Langflow virtual environment
# and run Langflow using the 'uv' command.
# =============================================

# Navigate to the Langflow project directory
cd /c/xampp/htdocs/std/ai/_testing/langflow/test1 || exit

# Activate the virtual environment
source langflow-env/Scripts/activate

# Run Langflow
uv run langflow run
