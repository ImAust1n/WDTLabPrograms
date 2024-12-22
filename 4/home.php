<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <h1>Registration Form</h1>
    <fieldset>
        <legend>Registration Form</legend>
        <form action="addRecord.php" method="post">
            Username: <input type="text" name="username"><br><br>
            Email: <input type="text" name="email"><br><br>
            Contact: <input type="text" name="contact"><br><br>
            <input type="submit" value="Register">
        </form>
    </fieldset>

    <h1>Display Records</h1>
    <fieldset>
        <legend>Display Records</legend>
        <li><a href="display.php">Show Records</a></li>
    </fieldset>
</body>
</html>