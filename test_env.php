<?php
$api_key = getenv('LANGFLOW_API_KEY');
if ($api_key) {
    echo "API key found: $api_key";
} else {
    echo "API key NOT found";
}
