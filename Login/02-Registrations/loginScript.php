<?php
// Connects to the connect file
require('connect.php');

// Gets the posted data from the form
// $_POST[nameInInput]
$entered_username = $_POST['loginUsername'];
$entered_password = $_POST['loginPassword'];

$sql = "SELECT tblusers.Username, tblusers.Password FROM tblusers WHERE tblusers.Username = '$entered_username' AND tblusers.Password = '$entered_password'";

// Runs SQL to check whether the username and password is in the database
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) {
    echo("You will be logged in and redirected");
    // Will send them back to a URL after 5 seconds:
    header('refresh: 5; url = ../index.php');
} else {
    $_SESSION['adminCheck'] = 0;
    header('Locaion:../userHome.php');
    echo("You are not logged in");
}


// echo($sql);
// echo("This is the username: ".$entered_username);
// echo("This is the password: ".$entered_password);


// Let the user login

?>


<!-- 
    Make a brand new sign up page within the system - Design this using Bootstrap (this should include first name, surname, username and password)

    Have the index file link to this using the register button

    See if you can code the SQL part of this
-->