<?php
include("27-Database-Connection.php");

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>" . $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["register_date"] . "<br>";
    }
} else {
    echo "No users found.";
}

mysqli_close($conn);
?>