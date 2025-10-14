<?php
$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$friend = $_POST['friend'];

$entry = "$name|$address|$city|$email|$gender|$friend\n";

file_put_contents("Zadatak1.txt", $entry, FILE_APPEND | LOCK_EX);

echo "Entry saved successfully!<br>";

// Optional convenience
echo "<a href=\"Zadatak3.html\">Go Back</a>";
?>