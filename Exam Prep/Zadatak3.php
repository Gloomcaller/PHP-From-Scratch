<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3 - Result</title>
</head>

<body>
    <?php
    $name = htmlspecialchars($_GET['username']);
    echo "<h2>Hello $name!</h2>";
    ?>
    <!-- Optional convenience -->
    <a href="Zadatak3.html">Go Back</a>
</body>

</html>