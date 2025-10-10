<?php
$username = $_GET['name'] ?? 'Guest';
echo "Welcome $username <br>";

$age = 24;
$var = isset($age) ? $age : "unknown";
echo "Your age is $var <br>";

# $num = 10;
$val = $num ?? 0;
echo "Your number is $val <br>";
?>