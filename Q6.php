<?php

// 6- write a program to find the max number of numbers group [10,30,20], using if. 



$nums = [10,30,20];

// finding max number
if($nums[0] >= $nums[1] && $nums[0] >= $nums[2]){
    echo "Max number is $nums[0]";
}else if($nums[1] >= $nums[0] && $nums[1] >= $nums[2]){
    echo "Max number is $nums[1]";
}else{
    echo "Max number is $nums[2]";
}

// ---------------------- Ans 2 ----------------------

$nums = [10,30,20];
$max = $nums[0];

if($nums[1] > $nums[0]){
    $max = $nums[1];
}

if($nums[2] > $nums[1]){
    $max = $nums[2];
}

echo "</br>Max number is $max";