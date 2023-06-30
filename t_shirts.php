<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css"/>
<title>FashionHut|SriLanka'sLargestFashionSite</title>
<link rel="shortcut icon" type="image/png" href="Images/Logo/favicon.JPG"/>
</head>
<body>
<?php include('Templates/header.php');?>

<?php include 'dbconfig.php'; ?>
<div class="container jumbotron col-md-12">
<h2 class="text-center">T-Shirts</h2>
	<div class="col-md-12">
<?php
    		$sql = "SELECT title,whom,category,price,size,photo FROM `create-add` WHERE category='T-Shirts';";

		  // execute the query and stores the 
		  //returned records in $result variable
		  $result = $conn->query($sql);
		  
		  // checks whether result has one or more rows
		  if ($result->num_rows > 0) {
				// output data of each row
			  while($row = $result->fetch_assoc()) {   ?>
				                    <div class="col-md-4" style="margin-top:10px;">
                      <div style="width:180px; height:180px; margin-left:auto; margin-right:auto;">
                          <img src="Uploads/<?php echo $row['photo']; ?>" class="img-rounded" style="width:180px; height:180px; border:1px solid grey; margin-top:5px;"/>
                      </div>
                      <h4 style="text-align:center;"><?php echo $row['title']; ?></h4>
                      <h5 style="text-align:center;">Rs.<?php echo $row['price']; ?></h5>
                      <h6 style="text-align:center;"><?php echo $row['whom']; ?></h6>
                      <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
                      <div style="margin-left:auto; margin-right:auto; width:25%;"> 
                          <a href="order.php"><button type="submit" class="btn btn-success">Buy It Now</button></a>
                      </div>
                  </div>

		<?php	  }
		  }else{
			  echo "0 results";
		  }
	
?>
</div>
</div>
<?php include('Templates/footer.php');?>

</body>
</html>