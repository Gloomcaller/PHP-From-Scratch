<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association</title>
</head>

<body>
    <form action="13-Association.php" method="POST">
        <label>Enter a country: </label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>

</html>
<?php
$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "Australia" => "Canberra",
    "India" => "New Delhi"
);

$capital = $capitals[$_POST["country"]];
echo "The capital is {$capital}";
?>