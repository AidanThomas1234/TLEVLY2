<?php
// Connection Variables
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "dbPHPSessions";

// Connection String
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Checks whether the connection fully works:
if($conn) {
    echo("You are connected".mysqli_get_host_info($conn));
} else {
    die("Error could not connect".mysqli_connect_error());
}

?>