<?php
 
/*
10- Write a function to check whether a number is prime or not. 
Note: A prime number (or a prime) is a natural number greater than 1 that has no 
positive divisors other than 1 and itself.
*/


$num = 13;

function checkPrime(int $num){
    $prime = FALSE;
    if($num > 1){
        
        for($i = 2; $i <= $num; $i++){
            if($num % $i == 0 && $num > $i){
                break;
            }else{
                $prime = TRUE;
            }
        }

        return $prime;
    }
}

echo "$num is " . (checkPrime($num) ? 'a prime' : 'NOT a prime');
