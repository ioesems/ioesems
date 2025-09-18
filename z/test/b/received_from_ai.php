<?php
function parse_ai_response($raw_response) {
    $result = [
        'basic_correction' => '',
        'medium_correction' => '',
        'high_professional_correction' => '',
        'spelling_percent' => 0,
        'grammar_percent' => 0,
        'subject_verb_percent' => 0,
        'article_percent' => 0,
        'other_mistakes_percent' => 0
    ];

    // Split response into lines
    $lines = explode("\n", $raw_response);
    
    foreach ($lines as $line) {
        $line = trim($line);
        if (strpos($line, 'Basic Level Correction:') === 0) {
            $result['basic_correction'] = trim(str_replace('Basic Level Correction:', '', $line));
        } 
        elseif (strpos($line, 'Medium Level Correction:') === 0) {
            $result['medium_correction'] = trim(str_replace('Medium Level Correction:', '', $line));
        }
        elseif (strpos($line, 'High Professional Correction:') === 0) {
            $result['high_professional_correction'] = trim(str_replace('High Professional Correction:', '', $line));
        }
        elseif (strpos($line, 'Overall Spelling Mistakes:') === 0) {
            $value = trim(str_replace('Overall Spelling Mistakes:', '', $line));
            $value = str_replace('%', '', $value);
            $result['spelling_percent'] = (float)$value;
        }
        elseif (strpos($line, 'Overall Grammatical Mistakes:') === 0) {
            $value = trim(str_replace('Overall Grammatical Mistakes:', '', $line));
            $value = str_replace('%', '', $value);
            $result['grammar_percent'] = (float)$value;
        }
        elseif (strpos($line, 'Subject Verb Agreement:') === 0) {
            $value = trim(str_replace('Subject Verb Agreement:', '', $line));
            $value = str_replace('%', '', $value);
            $result['subject_verb_percent'] = (float)$value;
        }
        elseif (strpos($line, 'Article Mistakes:') === 0) {
            $value = trim(str_replace('Article Mistakes:', '', $line));
            $value = str_replace('%', '', $value);
            $result['article_percent'] = (float)$value;
        }
        elseif (strpos($line, 'Other Mistakes:') === 0) {
            $value = trim(str_replace('Other Mistakes:', '', $line));
            $value = str_replace('%', '', $value);
            $result['other_mistakes_percent'] = (float)$value;
        }
    }
    
    return $result;
}
?>