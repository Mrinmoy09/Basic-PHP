<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" method="post">
        <label for="">X:</label>
        <input type="text" name="x"> <br>
        <label for="">Y:</label>
        <input type="text" name="y"> <br>
        <label for="">Z:</label>
        <input type="text" name="z"> <br>
        <input type="submit" value="total">
    </form>
</body>
</html>


<?php

    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];

    // $total = null; 

    // $total = abs($x);
    // $total = min($x, $y ,$z);
    // $total = max($x, $y ,$z);
    // $total = sqrt($x);
    // $total = round($x); //The round() function rounds a floating-point number to its nearest integer
    // $total = ceil($x); //The ceil() function always returns a floting nuber to its upper integer
    // $total = floor($x); //The floor() function always returns a floting nuber to its lower integer
    // $total = pow($x, $y);
    echo $total;

?>