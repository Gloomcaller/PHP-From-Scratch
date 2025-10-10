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