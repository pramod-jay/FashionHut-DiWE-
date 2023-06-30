
<?php 
	include '../dbconfig.php';
	
	$name = $_POST['txtname']; 
	$fline = $_POST['txtFline'];
	$sline = $_POST['txtSline'];
	$tline = $_POST['txtTline'];
	$phone = $_POST['txtTele'];
	$email = $_POST['txtEmail'];
	$quantity = $_POST['txtQuantity'];
	
	
	
	
	if(isset($_POST['btnOrder'])){
		$sql = "INSERT INTO `order` (`name`, `Fline`, `Sline`, `Tline`, `Phone`, `email`, `qunatity`) VALUES ('$name', '$fline', '$sline', '$tline', '$phone', '$email', '$quantity');";
		if(empty($name) || empty($fline) || empty($phone) || empty($quantity)){
			header("location: ../order.php?error");
		}else if($conn->query($sql) === TRUE){
				header("location: ../thankyou.php");
			}else{
				header("location: ../oreder.php?error");
				}
	
}
	?>
