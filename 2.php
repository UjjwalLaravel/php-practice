<?php

// Question 2: First Non-Repeating Character

// Given a string, find the first non-repeating character. If all characters repeat, return null.

// Example:
// Input → "programming"
// Output → "p"

$str = 'programming';
function nonReturningChar($str){
    $char_frequency_map = [];
    for($i=0; $i<strlen($str); $i++){
        if(isset($char_frequency_map[$str[$i]])){
            $char_frequency_map[$str[$i]] = $char_frequency_map[$str[$i]] +1;
        }else{
            $char_frequency_map[$str[$i]] = 1;
        }
    }
    foreach($char_frequency_map as $char=>$count){
        if($count == 1) return $char;
    }
    return null;

}

var_dump(nonReturningChar($str));