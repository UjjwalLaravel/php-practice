<?php

// Question 4: Missing Number in an Array

// You are given an array of numbers from 1 to N, with one number missing. Find the missing number.

// Example:
// Input → [1, 2, 4, 5] with N=5
// Output → 3

$arr = [1, 2, 4,3, 5];
$n=6;
function missingNumber($arr, $n){
    for($i=1; $i<=$n; $i++){
        if(!in_array($i, $arr)){
            return $i;
        }
    }
}

var_dump(missingNumber($arr, $n));