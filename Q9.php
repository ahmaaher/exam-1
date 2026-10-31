<?php

// 9-Write a PHP script that checks if a string contains another string.(using regular expression). 

$str = "Write PHP program to check if a string contains another string";
$strToSearch = 'php';

function checkExistance(string $haystick, string $needle){
    $pattern = '/' . $needle . '/i';
    return preg_match($pattern, $haystick);
}


if(checkExistance($str, $strToSearch) == 1){
    echo "($strToSearch) exists in: ($str)";
}else{
    echo "($strToSearch) NOT exists in: ($str)";
}
