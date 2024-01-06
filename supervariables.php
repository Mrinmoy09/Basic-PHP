<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="supervariables.php" method="post">
        <label>Quantity:</label><br>
        <input type="text" name="quantity"> <br>
        <input type="submit" value="total">
    </form>
</body>
</html>



<?php
//$_GET is not secured as data is append to the url but
// it is better for a search page -- char limit

//$_POST is more sercured and better for submitting credentials
//no data limit
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo"You have ordered {$quantity} x {$item}/s <br>";
    echo"Your total is : \${$total}";
?>