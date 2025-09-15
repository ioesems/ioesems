<?php
/**
 * Auto Quote Storage System - Nepal Time Based
 * This script runs automatically when users visit the website
 * Checks Nepal time and stores quotes at 12:00 AM automatically
 */

// Set Nepal timezone
date_default_timezone_set('Asia/Kathmandu');

// Include database configuration
include '../../../components/login/config.php';

// Function to log activities
function logActivity($message) {
    $timestamp = date('Y-m-d H:i:s');
    $logFile = __DIR__ . '/logs/quote_storage.log';
    
    // Create logs directory if it doesn't exist
    $logDir = dirname($logFile);
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    file_put_contents($logFile, "[$timestamp] (Nepal Time) $message\n", FILE_APPEND | LOCK_EX);
}

// Function to check if quotes need to be updated
function needsQuoteUpdate($conn) {
    $today = date("Y-m-d");
    $current_hour = (int)date('H');
    
    // Check if quotes exist for today
    $check = $conn->query("SELECT COUNT(*) as count FROM quotes WHERE DATE(date_added) = '$today'");
    $result = $check->fetch_assoc();
    $quotes_today = $result['count'];
    
    // Check last update time
    $last_update = $conn->query("SELECT MAX(date_added) as last_update FROM quotes WHERE DATE(date_added) = '$today'");
    $last_result = $last_update->fetch_assoc();
    $last_update_time = $last_result['last_update'];
    
    // If no quotes today and it's past 12 AM, update needed
    if ($quotes_today == 0 && $current_hour >= 0) {
        return true;
    }
    
    // If quotes exist but were added before midnight today, update needed
    if ($last_update_time && date('Y-m-d', strtotime($last_update_time)) < $today) {
        return true;
    }
    
    return false;
}

// Function to fetch engineering-focused quotes from ZenQuotes API
function fetchEngineeringQuotes() {
    $zen_api = "https://zenquotes.io/api/quotes";
    $context = stream_context_create([
        'http' => [
            'timeout' => 10 // 10 seconds timeout
        ]
    ]);
    
    $quotes_json = @file_get_contents($zen_api, false, $context);
    
    if (!$quotes_json) {
        logActivity("Failed to fetch quotes from ZenQuotes API");
        return false;
    }
    
    $all_quotes = json_decode($quotes_json, true);
    if (!$all_quotes) {
        logActivity("Failed to decode JSON from ZenQuotes API");
        return false;
    }
    
    // Keywords relevant to engineering students
    $engineering_keywords = [
        'study', 'learn', 'learning', 'knowledge', 'work', 'effort', 'problem', 
        'success', 'engineer', 'engineering', 'goal', 'focus', 'achievement', 
        'discipline', 'innovation', 'solution', 'design', 'build', 'create',
        'technology', 'science', 'math', 'future', 'progress', 'challenge',
        'perseverance', 'dedication', 'skill', 'education', 'mind', 'think',
        'inspiration', 'motivation', 'dream', 'vision', 'excellence', 'quality'
    ];
    
    // Filter quotes containing engineering-related keywords
    $filtered_quotes = [];
    foreach ($all_quotes as $quote) {
        $quote_text = $quote['q'] ?? '';
        $quote_author = $quote['a'] ?? 'Unknown';
        
        foreach ($engineering_keywords as $keyword) {
            if (stripos($quote_text, $keyword) !== false && strlen($quote_text) > 20) {
                $filtered_quotes[] = [
                    'text' => $quote_text,
                    'author' => $quote_author
                ];
                break; // Found keyword, move to next quote
            }
        }
    }
    
    logActivity("Filtered " . count($filtered_quotes) . " engineering-related quotes from " . count($all_quotes) . " total quotes");
    return $filtered_quotes;
}

// Function to get fallback quotes for engineering students
function getFallbackQuotes() {
    return [
        [
            'text' => 'The engineer has been, and is, a maker of history.',
            'author' => 'James Kip Finch'
        ],
        [
            'text' => 'Engineering is the art of directing the great sources of power in nature for the use and convenience of man.',
            'author' => 'Thomas Tredgold'
        ],
        [
            'text' => 'Scientists study the world as it is; engineers create the world that has never been.',
            'author' => 'Theodore von Karman'
        ],
        [
            'text' => 'Success is not final, failure is not fatal: it is the courage to continue that counts.',
            'author' => 'Winston Churchill'
        ],
        [
            'text' => 'Learning never exhausts the mind.',
            'author' => 'Leonardo da Vinci'
        ],
        [
            'text' => 'The best way to predict the future is to invent it.',
            'author' => 'Alan Kay'
        ],
        [
            'text' => 'Engineering is not only study of 45 subjects but it is moral studies of intellectual life.',
            'author' => 'Prakhar Srivastav'
        ],
        [
            'text' => 'The ideal engineer is a composite... He is not a scientist, he is not a mathematician, he is not a sociologist or a writer; but he may use the knowledge and techniques of any or all of these disciplines in solving engineering problems.',
            'author' => 'Nathan W. Dougherty'
        ],
        [
            'text' => 'Innovation distinguishes between a leader and a follower.',
            'author' => 'Steve Jobs'
        ],
        [
            'text' => 'The important thing is not to stop questioning.',
            'author' => 'Albert Einstein'
        ]
    ];
}

// Function to store quotes in database
function storeQuotes($conn, $quotes, $max_quotes = 6) {
    $stored_count = 0;
    $quotes_to_store = array_slice($quotes, 0, $max_quotes);
    
    foreach ($quotes_to_store as $quote) {
        $quote_text = $conn->real_escape_string(trim($quote['text']));
        $author = $conn->real_escape_string(trim($quote['author']));
        
        // Avoid duplicates
        $duplicate_check = $conn->query("SELECT id FROM quotes WHERE quote_text = '$quote_text' LIMIT 1");
        if ($duplicate_check->num_rows > 0) {
            continue; // Skip duplicate
        }
        
        // Insert quote
        $sql = "INSERT INTO quotes (quote_text, author, date_added) VALUES ('$quote_text', '$author', NOW())";
        
        if ($conn->query($sql)) {
            $stored_count++;
            logActivity("Stored quote: " . substr($quote_text, 0, 50) . "... by " . $author);
        } else {
            logActivity("Failed to store quote: " . $conn->error);
        }
    }
    
    return $stored_count;
}

// Function to clean old quotes
function cleanupOldQuotes($conn) {
    $cleanup_sql = "DELETE FROM quotes WHERE date_added < DATE_SUB(NOW(), INTERVAL 45 DAY)";
    if ($conn->query($cleanup_sql)) {
        $affected_rows = $conn->affected_rows;
        if ($affected_rows > 0) {
            logActivity("Cleaned up $affected_rows old quotes (older than 45 days)");
            return $affected_rows;
        }
    }
    return 0;
}

// Main function to update quotes
function updateDailyQuotes($conn) {
    try {
        $nepal_time = date('Y-m-d H:i:s');
        logActivity("Starting automatic quote update process at $nepal_time");
        
        // Check if update is needed
        if (!needsQuoteUpdate($conn)) {
            logActivity("Quotes are already up to date for today");
            return ['status' => 'already_updated', 'message' => 'Quotes already updated today'];
        }
        
        // Attempt to fetch quotes from API
        $quotes = fetchEngineeringQuotes();
        
        // If API fails or insufficient quotes, use fallback
        if (!$quotes || count($quotes) < 3) {
            logActivity("Using fallback quotes due to insufficient API results");
            $quotes = getFallbackQuotes();
        }
        
        // Shuffle quotes to get random selection
        shuffle($quotes);
        
        // Store quotes
        $stored_count = storeQuotes($conn, $quotes, 6);
        
        // Clean up old quotes
        $cleaned_count = cleanupOldQuotes($conn);
        
        logActivity("Successfully stored $stored_count new quotes for today");
        
        return [
            'status' => 'success', 
            'stored' => $stored_count,
            'cleaned' => $cleaned_count,
            'message' => "Updated $stored_count quotes for today"
        ];
        
    } catch (Exception $e) {
        logActivity("Error occurred: " . $e->getMessage());
        return ['status' => 'error', 'message' => $e->getMessage()];
    }
}

// Auto-trigger function (call this in your main pages)
function autoTriggerQuoteUpdate($conn = null) {
    // Check if database connection exists
    if (!$conn || !($conn instanceof mysqli)) {
        logActivity("ERROR: Invalid database connection provided");
        return ['status' => 'error', 'message' => 'Database connection not available'];
    }
    
    $current_hour = (int)date('H');
    $current_minute = (int)date('i');
    
    // Only run between 12:00 AM and 12:30 AM Nepal time
    if ($current_hour == 0 && $current_minute <= 30) {
        return updateDailyQuotes($conn);
    }
    
    // Also run if no quotes exist for today (emergency fallback)
    $today = date("Y-m-d");
    $check = $conn->query("SELECT COUNT(*) as count FROM quotes WHERE DATE(date_added) = '$today'");
    if ($check) {
        $result = $check->fetch_assoc();
        
        if ($result['count'] == 0) {
            logActivity("Emergency quote update triggered - no quotes found for today");
            return updateDailyQuotes($conn);
        }
    } else {
        logActivity("ERROR: Failed to check existing quotes");
        return ['status' => 'error', 'message' => 'Database query failed'];
    }
    
    return ['status' => 'no_action', 'message' => 'No update needed at this time'];
}

// If called directly (for testing)
if (basename(__FILE__) == basename($_SERVER["SCRIPT_NAME"])) {
    echo "<h3>Nepal Time Auto Quote Storage System</h3>";
    echo "<p>Current Nepal Time: " . date('Y-m-d H:i:s A') . "</p>";
    
    $result = updateDailyQuotes($conn);
    
    echo "<p>Status: " . $result['status'] . "</p>";
    echo "<p>Message: " . $result['message'] . "</p>";
    
    if (isset($result['stored'])) {
        echo "<p>Quotes Stored: " . $result['stored'] . "</p>";
    }
    
    if (isset($result['cleaned'])) {
        echo "<p>Old Quotes Cleaned: " . $result['cleaned'] . "</p>";
    }
    
    // Show recent log entries
    $logFile = __DIR__ . '/logs/quote_storage.log';
    if (file_exists($logFile)) {
        echo "<h4>Recent Log Entries:</h4>";
        echo "<pre>" . htmlspecialchars(tail($logFile, 10)) . "</pre>";
    }
    
    $conn->close();
}

// Helper function to get last N lines from log file
function tail($filename, $lines = 10) {
    if (!file_exists($filename)) {
        return "No log file found.";
    }
    
    $handle = fopen($filename, "r");
    if (!$handle) {
        return "Could not open log file.";
    }
    
    $linecounter = $lines;
    $pos = -2;
    $beginning = false;
    $text = array();
    
    while ($linecounter > 0) {
        $t = " ";
        while ($t != "\n") {
            if(fseek($handle, $pos, SEEK_END) == -1) {
                $beginning = true; 
                break; 
            }
            $t = fgetc($handle);
            $pos--;
        }
        $linecounter--;
        if($beginning) {
            rewind($handle);
        }
        $line = fgets($handle);
        if ($line !== false) {
            $text[$lines-$linecounter-1] = $line;
        }
        if($beginning) break;
    }
    fclose($handle);
    
    $result = array_reverse($text);
    return is_array($result) ? implode("", $result) : "No log entries found.";
}

?>