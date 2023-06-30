
<?php 
	include '../dbconfig.php';
	
	$fname = $_POST['txtFname']; 
	$lname = $_POST['txtLname'];
	$dob = $_POST['txtDob'];
	$home = $_POST['txtHome'];
	$street = $_POST['txtStreet'];
	$province = $_POST['txtProvince'];
	$mobile = $_POST['txtMobile'];
	$user = $_POST['txtUname'];
	$password = $_POST['txtPassword'];
	$cpassword = $_POST['txtCpassword'];
	
	
	
	
	if(isset($_POST['btnCreate'])){
		$sql = "INSERT INTO `fashionhut`.`member-registration` (`fname`, `lname`, `dob`, `home`, `street`, `province`, `mobile`, `user`, `password`) VALUES ('$fname', '$lname', '$dob', '$home', '$street', '$province', '$mobile', '$user', '$password');";
		if(empty($fname) || empty($lname) || empty($home) || empty($street) || empty($province) || empty($mobile) || empty($user) || empty($password) || empty($cpassword) || ($password)!=($cpassword)){
			header("location: ../register.php?error");
		}else if($conn->query($sql) === TRUE){
				header("location: ../register.php?success");
			}else{
				header("location: ../register.php?error");
				}
	
}
	?>
