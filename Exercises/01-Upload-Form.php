<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
</head>

<body>
    <h2>File Upload</h2>
    <form action="01-Upload-Form.php" method="POST" enctype="multipart/form-data">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="file">File:</label><br>
        <input type="file" id="file" name="file"><br>
        <input type="submit" value="Upload file" name="submit"><br>
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];

    $file_name = $_FILES["file"]["name"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $file_size = $_FILES["file"]["size"];
    $file_error = $_FILES["file"]["error"];

    if ($file_error === 0) {
        $destination = $file_name;

        if (move_uploaded_file($file_tmp, $destination)) {
            echo "File uploaded sucessfully.<br>";
            echo "Username: $username<br>";
            echo "Email: $email<br>";
            echo "File size: $file_size<br>";
        } else {
            echo "Error during file upload.<br>";
        }
    } else {
        echo "Error occured: " . $file_error . "<br>";
    }
}
?>