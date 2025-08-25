<?php
// <!-- Write a PHP function that takes a sentence and reverses the order of words (but not the characters inside words).

// Example:
// Input → "This is a PHP interview"
// Output → "interview PHP a is This" -->

// With in built functions
$str = "This is a PHP interview";
function reverseSentence($str){
    $words = explode(' ', $str);
    return implode(' ',array_reverse($words));
}

var_dump(reverseSentence($str));