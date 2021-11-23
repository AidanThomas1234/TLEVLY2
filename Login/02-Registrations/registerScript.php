<?php
// Require the connect file
require('connect.php');
// Echo out the username and password
$entered_username = $_POST["inputUsername"];
$entered_password = $_POST["inputPassword"];

// Displaying the username and password onto the screen:
echo($entered_username);
echo($entered_password);

$encryptedPass = password_hash($entered_password, PASSWORD_DEFAULT);
echo($encryptedPass);

// Add this onto the database:
$sql = "INSERT INTO tblusers (Username, Password) VALUES ('$entered_username', '$encryptedPass')";

if($result = mysqli_query($conn, $sql)) {
    echo("Record has been entered, woooo!!!");
} else {
    echo("BOOO, DOES NOT WORK" .$sql);
}
?>