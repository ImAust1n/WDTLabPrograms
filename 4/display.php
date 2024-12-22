<?php
$hostname = "localhost";
$username = "root";
$password = "";

$db_handle = mysqli_connect($hostname, $username, $password)
or die("Couldn't Connect to SQL Server!");
echo "Connected to SQL Successfully.";

$selected = mysqli_select_db($db_handle, "waste")
or die("Couldn't Select the DB!");
echo "Selected DB Successfully.";
echo "$selected";

$query = "SELECT * FROM userLogin";
$records = mysqli_query($db_handle, $query);
?>

<html>
    <head>Complete Data</head>
    <body>
        <table border="1">
            <tr><th>Username</th><th>Email</th><th>Contact</th></tr>
            <?php
            while ($row = mysqli_fetch_assoc($records)) {
                echo "<tr>";
                echo "<td>$row[username]</td>";
                echo "<td>$row[email]</td>";
                echo "<td>$row[contact]</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>