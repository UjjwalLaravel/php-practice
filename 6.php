<?php

// Write a PHP function to check if two strings are anagrams of each other (contain the same characters in a different order).

// Example:
// Input → "listen", "silent"
// Output → true

// Input → "hello", "world"
// Output → false
$str1 = 'listen';
$str2 = 'silent';
// function checkAnagram($str1, $str2){
//     if(strlen($str1) != strlen($str2)) return false;
//     $char_frequency_map=[];
//     $chars1 = str_split($str1);
//     $chars2 = str_split($str2);
//     foreach($chars1 as $char){
//         if(isset($char_frequency_map[$char])){
//             $char_frequency_map[$char]++;
//         }else{
//             $char_frequency_map[$char]=1;
//         }
//     }
//     foreach($chars2 as $char){
//         if(isset($char_frequency_map[$char])){
//             $char_frequency_map[$char]--;
//         }else{
//             return false;
//         }
//         if($char_frequency_map[$char] < 0){return false;}
//     }

//     foreach($char_frequency_map as $char){
//         if($char != 0) return false;
//     }
//     return true;
// }

// optimised
function checkAnagram($str1, $str2){
    if(strlen($str1) != strlen($str2)) return false;

    $char_frequency_map = [];

    // Count chars from str1
    foreach(str_split($str1) as $char){
        $char_frequency_map[$char] = ($char_frequency_map[$char] ?? 0) + 1;
    }

    // Subtract chars from str2
    foreach(str_split($str2) as $char){
        if(!isset($char_frequency_map[$char]) || $char_frequency_map[$char] == 0){
            return false;
        }
        $char_frequency_map[$char]--;
    }

    return true; // all counts balanced
}
var_dump(checkAnagram($str1, $str2));