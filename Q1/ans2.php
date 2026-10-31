<?php
// 1- Write a PHP script using a nested for loop that creates a chessboard. 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard 2</title>
    <style>
        table{border-collapse: collapse;margin: auto;}
        tbody{border: 3px solid #000;}
        tr{margin: 0 0;align: center;}
        td{width: 100px; height: 100px; padding: 0 0;}
    </style>
</head>
<body>
    <table>
        <tbody>
            <?php
                $white = '#c5c3c3';
                $black = '#000000';

                for($i=1; $i <= 8; $i++){
                    echo "<tr>";
                        for($j=1; $j<=8; $j++){
                            $bg_color = (($i+$j) % 2 == 0) ? $white : $black;
                            echo "<td style='background-color: $bg_color'></td>";
                        }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>