<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbSystem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    // This will display an error on the page
    echo(mysqli_connect_error());
    die("Error connecting");
} else {
    // Display the connection string
    echo("Connected");
}
?>