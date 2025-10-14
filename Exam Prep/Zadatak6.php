<?php
$to_email = $_POST['to_email'];
$title = $_POST['title'];
$message = $_POST['message'];

echo "<h3>Email Details:</h3>";
echo "<p><strong>To:</strong> $to_email</p>";
echo "<p><strong>Title:</strong> $title</p>";
echo "<p><strong>Message:</strong> $message</p>";
?>