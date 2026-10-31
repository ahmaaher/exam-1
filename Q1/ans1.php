<?php
// 1- Write a PHP script using a nested for loop that creates a chessboard. 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <style>
        .container {
            width: 800px;
            margin: auto;
            border: 3px solid #000;
        }
        .child {
            display: inline-block;
            width: 12.5%;
            height: 100px;
            vertical-align: top;
        }
    </style>
</head>

<body>
    <div class='container'>
        <?php
            $white = '#c5c3c3';
            $black = '#000000';

            for($i=1; $i <= 8; $i++){
                for($j=1; $j<=8; $j++){
                    $bg_color = (($i+$j) % 2 == 0) ? $white : $black;
                    echo "<div class='child' style='background-color: $bg_color'></div>";
                }
            }
        ?>
    </div>
</body>

</html>