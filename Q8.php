<?php

// 8 - Write a PHP script to get the number of the month before the current month. 

// getting the 15th of the current month to pervent conflict of months of 29 and 31 days
$baseDate = date("Y-m-15"); // date(format, timestamp = time() is default)

$prev_month = strtotime($baseDate . '-1 month'); // getting the 15th of the prev month

// printing the month of the prev month
echo "Previous month is: " . date('F', $prev_month) . " (" . date('n', $prev_month) . ")";
















