<?php

session_start();    
// Sesion Dstoy
session_destroy(); /// This will emove any sesions in my code 

// Session unset
session_unset($_SESSION['adminCheck']);



/* Redirect to home  */
header("Location:../loginfom.php")
?>