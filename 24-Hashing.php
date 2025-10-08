<?php
$password = "pizza0000";

$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify("sushi999", $hash)) {
    echo "You are logged in!";
} else {
    echo "Incorrect password!";
}
?>