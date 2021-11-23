<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Script</title>
	  <?php require('connect.php');
	  session_start();
	  ?>
  </head>
  <body>
	  <?php
	  $enteredUsername = $_POST['loginUsername'];
	  $enteredPassword = $_POST['loginPassword'];
	  
	  $sql = "SELECT * FROM tblUsers WHERE tblUsers.Username = '$enteredUsername' AND tblUsers.Password = '$enteredPassword'";
	  $result = mysqli_query($conn, $sql);
	  
	if(mysqli_num_rows($result) == 1){
		$_SESSION['adminCheck'] = 1;
        while($row = mysqli_fetch_assoc($result)){
            $adminCheck = $row['Admin']; 
            if($adminCheck == 1) {
                header("Location: adminHome.php");
            } else {
				$_SESSION['adminCheck'] = 0;
                header("Location: userHome.php");    
            }
        }
      } else {
        echo("None have been returned");  
      }
     ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>