<?php

// 2- write a PHP program to print this shape (using nested loop)

// ======================= 1st shape =======================
echo "<div style='width: fit-content; margin: 50px auto; text-align: center;'>";    
    
    // count up
    for($i = 1; $i <= 5; $i++){
        for($j = 1; $j <= $i; $j++){
            echo "&nbsp;*&nbsp;";
        }
        echo "</br>";
    }

    // count down
    for($i = 4; $i >= 1; $i--){
        for($j = $i; $j >= 1; $j--){
            echo "&nbsp;*&nbsp;";
        }
        echo "</br>";
    }

echo "</div>";

// ======================= 2nd shape =======================
echo "<div style='width: fit-content; margin: 50px auto; text-align: left; direction: ltr;'>";    
    // count up
    for($i = 1; $i <= 5; $i++){
        for($j = 1; $j <= $i; $j++){
            echo "&nbsp;*&nbsp;";
        }
        echo "</br>";
    }

    // count down
    for($i = 5; $i >= 1; $i--){
        for($j = $i; $j >= 1; $j--){
            echo "&nbsp;*&nbsp;";
        }
        echo "</br>";
    }

echo "</div>";


// ======================= 3rd shape =======================
echo "<div style='width: fit-content; margin: 50px auto; text-align: left; direction: ltr;'>";    
    // count up
    for($i = 1; $i <= 5; $i += 2){
        for($j = 1; $j <= $i; $j++){
            echo "&nbsp;*&nbsp;";
        }
        echo "</br>";
    }

    // count down
    for($i = 3; $i >= 1; $i -= 2){
        for($j = $i; $j >= 1; $j--){
            echo "&nbsp;*&nbsp;";
        }
        echo "</br>";
    }

echo "</div>";