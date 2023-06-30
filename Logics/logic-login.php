<?php
	include '../dbconfig.php';
	
	$email = $_POST['txtEmail'];
	$password = $_POST['txtPassword'];
	
	
	if(isset($_POST['btnLogin'])){
	$sql = "SELECT user,password  FROM `member-registration` WHERE user='$email' && password='$password';";

	  // execute the query and stores the 
	  //returned records in $result variable
	  $result = $conn->query($sql);
	  
	  // checks whether result has one or more rows
	  if ($result->num_rows) {
			// output data of each row
		  $row = $result->fetch_assoc();
			  header("location: ../login.php?success");

	  }else{
		  header("location: ../login.php?error");
	  }
	}
	
?>
