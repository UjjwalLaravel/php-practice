<?php
// Question 3: Palindrome Check

// Check if a given string is a palindrome (case-insensitive).

// Example:
// Input → "Level"
// Output → true

$str = 'LevelEVEl';
function isPalindrome($str){
    $revStr='';
    for($i=0; $i<strlen($str); $i++){
        $revStr = $str[$i].$revStr;  
    }
    return strtolower($str) == strtolower($revStr);
}

var_dump(isPalindrome($str));