<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>

</body>

</html>

<?php
function hypotenuse(float $a, float $b)
{
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}
echo hypotenuse(3, 4);
?>