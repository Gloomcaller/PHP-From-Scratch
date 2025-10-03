<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>

<body>
    <form action="05-Math.php" method="POST">
        <label for="x">x:</label>
        <input type="text" name="x">
        <br>
        <label for="y">y:</label>
        <input type="text" name="y">
        <br>
        <label for="z">z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>

</html>

<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

// $total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);

// $total = pow($x, $y);
// $total = sqrt($x);

// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = pi();
// $total = rand(1, 20);
echo $total;
?>