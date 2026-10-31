<?php

// 5- write a program to filter even numbers from an array, delete all even numbers.

$nums = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

// obtaining odd numbers
$odd_nums = array_filter($nums, function($var){
        return ($var % 2 != 0); // or ($var & 1)
});

echo "<pre>";
print_r($odd_nums);

// obtaining the even numbers
$even_nums = array_filter($nums, function($var){
        return ($var % 2 == 0);  // or !($var & 1)
});

// delete even numbers
$nums = array_diff($nums, $even_nums);

print_r($nums);