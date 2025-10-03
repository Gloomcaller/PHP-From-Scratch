<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Methods</title>
</head>

<body>
    <form action="04-Methods.php" method="POST">
        <label for="quantity">Quantity:</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>

</html>

<?php
$item = "Sushi";
$price = 6.99;
$quantity = $_POST["quantity"];
$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}/s <br>";
echo "\nYour total is: \${$total}";
?>