<?php
include("27-Database-Connection.php");

$sql = "INSERT INTO users (user, password)
        VALUES ('Bob the Builder','Rebar123.')";

try {
    mysqli_query($conn, $sql);
    echo "<br>User is now registered.<br>";
} catch (mysqli_sql_exception) {
    echo "<br>Failed to register the user.<br>";
}

mysqli_close($conn);
?>