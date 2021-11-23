<?php
$servername = "localhost:3306";
$username = "spacebar_test";
$password = "Password@1";
$dbName = "spacebar_test";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if($conn) {
    echo("You are connected.<br>");
} else {
    die("Error. Could not connect.<br>");
    }



?>