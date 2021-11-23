<?php
	session_start();
    require('../connect.php');
    // Get the username and password details
    $enteredUser = $_POST['userLogin'];
    $enteredPass = $_POST['userPass'];
	// session_destory();

    $sql = "SELECT * FROM tblUsers WHERE tblUsers.username = '$enteredUser' AND tblUsers.password = '$enteredPass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
		while($row = mysqli_fetch_assoc($result)){
			$adminCheck = $row['Admin']; /* Will be used to store the data stored within the admin column */
			/* Checks whether the user is a current admin within the system */
			if($adminCheck == 1) {
				$_SESSION['adminCheck'] = 1;
				echo($_SESSION['adminCheck']);
				// header("Location: ../adminHome.php");
			} else {
				$_SESSION['adminCheck'] = 0;
				header("Location: ../userHome.php");	
			}
		}
	  } else {
		echo("None have been returned");  
	  }
?>