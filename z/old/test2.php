<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Engineering Student Quote</title>
<style>
body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
h1 { text-align:center; color: #333; }
.quote-box { 
    background: #fff; padding: 20px; max-width: 700px; margin: 20px auto; 
    border-left: 5px solid #0077cc; box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    font-size: 1.2em; color: #333;
}
button { display:block; margin: 20px auto; padding: 10px 20px; cursor: pointer; font-size:1em; }
</style>
</head>
<body>

<h1>Quote for Engineering Students</h1>

<div class="quote-box" id="quote-box">
    Loading quote...
</div>

<button onclick="location.reload()">Show New Quote</button>

<?php
// 1. Fetch all quotes from ZenQuotes API
$zen_api = "https://zenquotes.io/api/quotes";
$quotes_json = @file_get_contents($zen_api);
$all_quotes = $quotes_json ? json_decode($quotes_json, true) : [];

// 2. Define keywords relevant to engineering students
$keywords = ['study','learn','knowledge','work','effort','problem','success','engineer','goal','focus','achievement','discipline'];

// 3. Filter quotes containing keywords
$filtered = [];
if($all_quotes){
    foreach($all_quotes as $q){
        foreach($keywords as $k){
            if(stripos($q['q'], $k) !== false){
                $filtered[] = $q;
                break;
            }
        }
    }
}

// 4. Fallback if no quotes found
if(empty($filtered)){
    $filtered = [
        ['q'=>'Success is not final, failure is not fatal: it is the courage to continue that counts.','a'=>'Winston Churchill'],
        ['q'=>'Learning never exhausts the mind.','a'=>'Leonardo da Vinci'],
        ['q'=>'The best way to predict the future is to invent it.','a'=>'Alan Kay']
    ];
}

// 5. Pick one random quote
$best_quote = $filtered[array_rand($filtered)];
$english = $best_quote['q'];
$author = $best_quote['a'];

// 6. Display in the quote box
echo "<script>
document.getElementById('quote-box').innerText = ".json_encode($english." — ".$author).";
</script>";
?>

</body>
</html>
