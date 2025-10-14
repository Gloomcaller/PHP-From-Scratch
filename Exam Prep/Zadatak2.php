<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
</head>

<body>
    <h2>Data Table</h2>

    <?php
    $filename = "Zadatak2.txt";
    echo "<table border=1>";
    echo "<tr><th>Name</th><th>Address</th><th>City</th><th>Email</th><th>Gender</th><th>Friend</th><th>Image</th></tr>";

    $lines = file($filename);

    foreach ($lines as $line) {
        $data = explode("|", $line);
        echo "<tr>";
        foreach ($data as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>