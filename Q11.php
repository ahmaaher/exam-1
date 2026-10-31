<?php
 
/*
11- Use a cookie to change the default website background color. choose the 
new color from a dropdown menu of colors.
*/


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $bgColor = htmlspecialchars($_POST['color']);
    setcookie('bgColor', $bgColor, time() + 2678400);
}else{
    $bgColor = $_COOKIE['bgColor'] ?? '#ffffff';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?= $bgColor ?>;">
    <form action="" method="POST">
        Choose a color:
        <select name='color'>
            <option value="#ffffff" <?= $bgColor == "#ffffff" ? 'selected' : '' ?>>White</option>
            <option value="#000000" <?= $bgColor == "#000000" ? 'selected' : '' ?>>Black</option>
            <option value="#4e4b4b" <?= $bgColor == "#4e4b4b" ? 'selected' : '' ?>>Color 3</option>
            <option value="#8d3333" <?= $bgColor == "#8d3333" ? 'selected' : '' ?>>Color 4</option>
            <option value="#5022f7" <?= $bgColor == "#5022f7" ? 'selected' : '' ?>>Color 5</option>
            <option value="#0d0a88" <?= $bgColor == "#0d0a88" ? 'selected' : '' ?>>Color 6</option>
        </select>
        <input type="submit" value="Submit" />
    </form>
</body>
</html>
