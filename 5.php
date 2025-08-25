<?php

// Write a program to count the frequency of each word in a sentence.

// Example:
// Input → "This is a test and this test is simple"
// Output → { "this" => 2, "is" => 2, "a" => 1, "test" => 2, "and" => 1, "simple" => 1 }
$str = "This is a test and this test is simple";
function wordCountMap($str){
    $words = explode(' ', $str);
    $words_freq_map = [];
    foreach($words as $word){
        $word = strtolower($word);
        if(!isset($words_freq_map[$word])){
            $words_freq_map[$word] = 1;
        }else{
            $words_freq_map[$word]++;
        }
    }
    return $words_freq_map;
}

var_dump(wordCountMap($str));