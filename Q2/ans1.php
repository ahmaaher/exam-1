<?php

// 2- write a PHP program to print this shape (using nested loop)

// ======================= 1st shape =======================
echo "<div style='width: fit-content; margin: 50px auto; text-align: center;'>";    
    
    // counting the 9 rows of the shape
    for($i = 1; $i <= 9; $i++){
        $stars = 5 - abs(5 - $i); // counting the stars in the currunt row

        for($j = 1; $j <= $stars; $j++){
            echo "&nbsp;*&nbsp;";
        }
        echo "</br>";
    }

echo "</div>";

// ======================= 2nd shape =======================
echo "<div style='width: fit-content; margin: 50px auto; text-align: left; direction: ltr;'>";    
    
    // counting the 10 rows of the shape
    for($i = 1; $i <= 10; $i++){
        $stars = 5.5 - abs(5.5 - $i); // counting the stars in the currunt row

        for($j = 1; $j <= $stars; $j++){
            echo "&nbsp;*&nbsp;";    
        }
        echo "</br>";
    }

echo "</div>";


// ======================= 3rd shape =======================
echo "<div style='width: fit-content; margin: 50px auto; text-align: left; direction: ltr;'>";    
    
    // counting the 5 rows of the shape -> $i (1-10) because we add +2
    for($i = 1; $i <= 10; $i += 2){
        $stars = 5 - abs(5 - $i); // counting the stars in the currunt row

        for($j = 1; $j <= $stars; $j++){
            echo "&nbsp;*&nbsp;";    
        }
        echo "</br>";
    }

echo "</div>";