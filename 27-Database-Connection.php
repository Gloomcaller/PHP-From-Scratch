<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "sample_database";
$conn = null;

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
// connection in another file:
// include("24-Database-Connection.php");
?>