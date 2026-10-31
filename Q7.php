<?php

/*
7-Write a PHP script to increment date by one month 
Sample date : 2012-12-21 
Expected Output : 2013-01-21
*/


$date = "2012-12-21";
echo "Original date: $date <br>";

function addMonth(string &$date){
    $addMonth = strtotime($date . '+1 month');
    $date = date("Y-m-d", $addMonth);
}

addMonth($date); // added 1 month to the original date

echo "Date after one month: " . $date . " <br>";
echo "<hr>";

// --------------------------------------------

$date = date_create("21-12-2012");
echo "Original date: " . date_format($date, 'Y-m-d') . " <br>";

function addMonth_(object $date){
    $date = date_add($date, date_interval_create_from_date_string('1 month'));
    return date_format($date, 'Y-m-d');
}

$dateAfterMonth = addMonth_($date);
echo "Date after one month: $dateAfterMonth <br>";
echo "<hr>";

// --------------------------------------------

$date = "2012-12-21";
echo "Original date: " . $date . " <br>";

$newDate = new DateTime($date);
$newDate->modify('+1 month');
$date = $newDate->format('Y-m-d');

echo "Date after one month: " . $date;