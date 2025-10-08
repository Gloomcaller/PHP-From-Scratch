<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "sampDB";
$conn = "";

try {
    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name,
        $conn
    );
} catch (mysqli_sql_exception) {
    echo "Could not connect to the DB.";
}

if ($conn) {
    echo "You are connected.";
}
?>

<?php
// connection in aother file:
include("24-Database-Connection.php");
?>