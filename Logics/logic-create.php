<?php
	include '../dbconfig.php';
	
	$title = $_POST['txtTitle'];
	$whom = $_POST['txtWhom'];
	$category = $_POST['txtCategory'];
	$price = $_POST['txtPrice'];
	$size = $_POST['txtSize'];
	$ad_image = $_FILES['txtPhoto']['name'];
	
	
		if(isset($_POST['btnPost'])){
			
								if(move_uploaded_file($_FILES["txtPhoto"]["tmp_name"],"../uploads/".$ad_image)){ // upload success
						//echo 'Image uploaded';
					}

			$sql = "INSERT INTO `create-add` (`title`, `whom`, `category`, `price`, `size`, `photo`) VALUES ('$title', '$whom', '$category', '$price', '$size', '$ad_image');";	
			if(empty($title) || empty($price) || empty($size) || empty($ad_image)){
			header("location: ../create.php?error");
		}else if($conn->query($sql) === TRUE){
				header("location: ../all_ads.php");
			}else{
				header("location: ../create.php?error");
				}
		}
?>