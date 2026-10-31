<?php

/*
3- $array = [2,4,3,1,6,7,5,8,0,9] . 
Write a PHP program to sort this array to  ASC and also sort it as  DESC . 
(without using  built in functions) 
*/

$arr = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

function sortArr( array $arr, $sort_type = 'ASC'){
    $arrLen = count($arr);

    for($i=0; $i <=  $arrLen-2; $i++){

        for($j=0; $j <= $arrLen-$i-2; $j++){
            if(strtoupper($sort_type) == 'ASC'){
                if($arr[$j] > $arr[$j+1]){
                    [$arr[$j], $arr[$j+1]] = [$arr[$j+1], $arr[$j]];
                }
            }else if(strtoupper($sort_type) == 'DESC'){
                if($arr[$j] < $arr[$j+1]){
                    [$arr[$j], $arr[$j+1]] = [$arr[$j+1], $arr[$j]];
                }
            }
        }

    }

    return $arr;
}

echo "<pre>";
echo "ASC order:</br>";
print_r(sortArr($arr));

echo "</br></br>DESC order:</br>";
print_r(sortArr($arr, 'DESC'));






