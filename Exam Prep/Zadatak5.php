<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 5</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>City</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>Belgrade</td>
            <td><a href="?email=contact@belgrade.rs">contact@belgrade.rs</a></td>
        </tr>
        <tr>
            <td>Novi Sad</td>
            <td><a href="?email=info@novisad.com">info@novisad.com</a></td>
        </tr>
        <tr>
            <td>Niš</td>
            <td><a href="?email=office@nis.org">office@nis.org</a></td>
        </tr>
    </table>

    <?php
    if (isset($_GET['email'])) {
        $email = $_GET['email'];

        echo "
        <h2>Email:</h2><br>
        <form method=\"POST\" action=\"Zadatak6.php\">";
        echo "<input type=\"hidden\" name=\"to_email\" value=\"$email\">";

        echo "
            <label>Title:</label><br>
            <input type=\"text\" name=\"title\" required><br><br>
            <label>Message:</label><br>
            <textarea name=\"message\" rows=\"5\" cols=\"40\" required></textarea><br><br>
            <input type=\"submit\" value=\"Send\">
            <input type=\"reset\" value=\"Reset\">
        </form>
        ";
    }
    ?>
</body>

</html>