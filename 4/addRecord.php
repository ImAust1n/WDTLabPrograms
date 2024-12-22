<?php

$hostname = "localhost";
$username = "root";
$password = "";

$db_handle = mysqli_connect($hostname, $username, $password)
or die("Couldn't Connect to SQL.");
echo "Connected to SQL successfully.";

$selected = mysqli_select_db($db_handle, "waste")
or die("Couldn't select the DB.");
echo "DB selected successfully.";
echo "$selected";

$Name = $_POST['username'];
$Email = $_POST['email'];
$Contact = $_POST['contact'];

$sql = "insert into userLogin values ('$Name', '$Email', '$Contact');";

if (!(mysqli_query($db_handle, $sql))) {
    echo "Not Inserted";
} else {
    echo "<h2>Inserted Data</h2>";
    echo "<center><table border='1'>";
    echo "<tr><th>Username</th><th>Email</th><th>Contact</th></tr>";
    echo "<tr><th>$Name</th><th>$Email</th><th>$Contact</th></tr>";
    echo "</table></center>";
}

?>