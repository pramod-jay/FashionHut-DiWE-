<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css"/>
<title>FashionHut|SriLanka'sLargestFashionSite</title>
<link rel="shortcut icon" type="image/png" href="Images/Logo/favicon.JPG"/>
</head>

<body>
<?php include 'Templates/header.php'; ?>
<div class="panel">
	<div>
    	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:400px;">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="Images/Covers/NEW_01_Hero_USA.jpg" style="height:400px; width:100%;">
                    </div>

                    <div class="item">
                        <img src="Images/Covers/Fashion-facebook-cover-05.jpg" style="height:400px; width:100%;">
                    </div>

                    <div class="item">
                        <img src="Images/Covers/636013904667895369144891105_Fashion+Illustrations+of+street+fashion+bloggers+by+houston+fashion+illustrator+Rongrong+DeVoe.jpg" style="height:400px; width:100%;">
                    </div>
                </div>
              <div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>

    </div>
    <ul class="nav nav-pills nav-justified">
		 	<li role="presentation" style="font-size:18px;"><a href="ladies.php">Ladies</a></li>
  			<li role="presentation" style="font-size:18px;"><a href="gents.php">Gents</a></li>
  			<li role="presentation" style="font-size:18px;"><a href="kids.php">Kids</a></li>
	</ul>

<div class="col-md-3">
		
<div class="col-md-12 text-center" style="background-color:#666;">
   <h3 class="text-left" style="color:#FFF">Main Categories</h3>
    <div class="list-group"> 
      <a href="trousers.php" class="list-group-item">Trousers</a>
      <a href="t_shirts.php" class="list-group-item">T-Shirts</a>
      <a href="watches.php" class="list-group-item">Watches</a>
      <a href="foot_wares.php" class="list-group-item">Foot Wares</a>
      <a href="cosmetics.php" class="list-group-item">Cosmetics</a>
    </div>
    
</div>



<div class="col-md-12" style="margin-top:20px;">
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:200px;">
                <!-- Indicators -->
                

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="Images/Covers/NEW_01_Hero_USA.jpg" style="height:200px; width:100%;">
                    </div>

                    <div class="item">
                        <img src="Images/Covers/whatsnew.jpg" style="height:200px; width:100%;">
                    </div>

                    <div class="item">
                        <img src="Images/Covers/636013904667895369144891105_Fashion+Illustrations+of+street+fashion+bloggers+by+houston+fashion+illustrator+Rongrong+DeVoe.jpg" style="height:200px; width:100%;">
                    </div>
                </div>
             
</div>
</div>

<div class="col-md-12" style="margin-top:20px">
	<a href="about.php"><img src="Images/Thankyou/keep.JPG" style="width:100%;"/></a>
</div>
</div>


<h2 style="height:60px; margin-top:0; padding-top:20px;" class="text-center">Latest Ads</h2>
<div class="col-md-9" style="float:right">
<?php

	include 'dbconfig.php';
		$sql = "SELECT title,whom,category,price,size,photo FROM `create-add` WHERE `idcreate-add`=1;";

// execute the query and stores the 
//returned records in $result variable
$result = $conn->query($sql);
// checks whether result has one or more rows
	$result->num_rows; 
	  // output data of each row
    $row = $result->fetch_assoc();  ?>

                  <div class="col-md-4" style="margin-top:10px;">
                      <div style="width:180px; height:180px; margin-left:auto; margin-right:auto;">
                          <img src="Uploads/<?php echo $row['photo']; ?>" class="img-rounded" style="width:180px; height:180px; border:1px solid grey; margin-top:5px;"/>
                      </div>
                     
                     
                      <h4 style="text-align:center; color:black;" ><?php echo $row['title']; ?></h4>
                      <h5 style="text-align:center; color:black;">Rs.<?php echo $row['price']; ?></h5>
                      <h6 style="text-align:center; color:black;"><?php echo $row['whom']; ?></h6>
                      <h6 style="text-align:center; color:black;"><?php echo $row['size']; ?></h6>
                      <div style="margin-left:auto; margin-right:auto; width:25%;"> 
                          <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
                      </div>
                      
                  </div>
                
                  
<?php                  
                  
      	$sql = "SELECT title,whom,category,price,size,photo FROM `create-add` WHERE `idcreate-add`=2;";

			// execute the query and stores the 
			//returned records in $result variable
			$result = $conn->query($sql);
			// checks whether result has one or more rows
				$result->num_rows; 
				  // output data of each row
				$row = $result->fetch_assoc();
				$id = '2';
				?>
				
				
 			
                    	
							  <div class="col-md-4" style="margin-top:10px;">
								  <div style="width:180px; height:180px; margin-left:auto; margin-right:auto;">
									  <img src="Uploads/<?php echo $row['photo']; ?>" class="img-rounded" style="width:180px; height:180px; border:1px solid grey; margin-top:5px;"/>
								  </div>
                           
								  <h4 style="text-align:center;"><?php echo $row['title']; ?></h4>
								  <h5 style="text-align:center;">Rs.<?php echo $row['price']; ?></h5>
								  <h6 style="text-align:center;"><?php echo $row['whom']; ?></h6>
								  <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
								  <div style="margin-left:auto; margin-right:auto; width:25%;"> 
									  <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
								  </div>
							  </div>
                                   
<?php                  
                  
      	$sql = "SELECT title,whom,category,price,size,photo FROM `create-add` WHERE `idcreate-add`=3;";

			// execute the query and stores the 
			//returned records in $result variable
			$result = $conn->query($sql);
			// checks whether result has one or more rows
				$result->num_rows; 
				  // output data of each row
				$row = $result->fetch_assoc();  ?>
							  <div class="col-md-4" style="margin-top:10px;">
								  <div style="width:180px; height:180px; margin-left:auto; margin-right:auto;">
									  <img src="Uploads/<?php echo $row['photo']; ?>" class="img-rounded" style="width:180px; height:180px; border:1px solid grey; margin-top:5px;"/>
								  </div>
								  <h4 style="text-align:center;"><?php echo $row['title']; ?></h4>
								  <h5 style="text-align:center;">Rs.<?php echo $row['price']; ?></h5>
								  <h6 style="text-align:center;"><?php echo $row['whom']; ?></h6>
								  <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
								  <div style="margin-left:auto; margin-right:auto; width:25%;"> 
									 <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
								  </div>
							  </div>


<?php                  
                  
      	$sql = "SELECT title,whom,category,price,size,photo FROM `create-add` WHERE `idcreate-add`=4;";

			// execute the query and stores the 
			//returned records in $result variable
			$result = $conn->query($sql);
			// checks whether result has one or more rows
				$result->num_rows; 
				  // output data of each row
				$row = $result->fetch_assoc();  ?>
							  <div class="col-md-4" style="margin-top:10px;">
								  <div style="width:180px; height:180px; margin-left:auto; margin-right:auto;">
									  <img src="Uploads/<?php echo $row['photo']; ?>" class="img-rounded" style="width:180px; height:180px; border:1px solid grey; margin-top:5px;"/>
								  </div>
								  <h4 style="text-align:center;"><?php echo $row['title']; ?></h4>
								  <h5 style="text-align:center;">Rs.<?php echo $row['price']; ?></h5>
								  <h6 style="text-align:center;"><?php echo $row['whom']; ?></h6>
								  <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
								  <div style="margin-left:auto; margin-right:auto; width:25%;"> 
									  <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
								  </div>
							  </div>

<?php                  
                  
      	$sql = "SELECT title,whom,category,price,size,photo FROM `create-add` WHERE `idcreate-add`=5;";

			// execute the query and stores the 
			//returned records in $result variable
			$result = $conn->query($sql);
			// checks whether result has one or more rows
				$result->num_rows; 
				  // output data of each row
				$row = $result->fetch_assoc();  ?>
							  <div class="col-md-4" style="margin-top:10px;">
								  <div style="width:180px; height:180px; margin-left:auto; margin-right:auto;">
									  <img src="Uploads/<?php echo $row['photo']; ?>" class="img-rounded" style="width:180px; height:180px; border:1px solid grey; margin-top:5px;"/>
								  </div>
								  <h4 style="text-align:center;"><?php echo $row['title']; ?></h4>
								  <h5 style="text-align:center;">Rs.<?php echo $row['price']; ?></h5>
								  <h6 style="text-align:center;"><?php echo $row['whom']; ?></h6>
								  <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
								  <div style="margin-left:auto; margin-right:auto; width:25%;"> 
									  <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
								  </div>
							  </div>
<?php                  
                  
      	$sql = "SELECT title,whom,category,price,size,photo FROM `create-add` WHERE `idcreate-add`=6;";

			// execute the query and stores the 
			//returned records in $result variable
			$result = $conn->query($sql);
			// checks whether result has one or more rows
				$result->num_rows; 
				  // output data of each row
				$row = $result->fetch_assoc();  ?>
							  <div class="col-md-4" style="margin-top:10px;">
								  <div style="width:180px; height:180px; margin-left:auto; margin-right:auto;">
									  <img src="Uploads/<?php echo $row['photo']; ?>" class="img-rounded" style="width:180px; height:180px; border:1px solid grey; margin-top:5px;"/>
								  </div>
								  <h4 style="text-align:center;"><?php echo $row['title']; ?></h4>
								  <h5 style="text-align:center;">Rs.<?php echo $row['price']; ?></h5>
								  <h6 style="text-align:center;"><?php echo $row['whom']; ?></h6>
								  <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
								  <div style="margin-left:auto; margin-right:auto; width:25%;"> 
									  <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
								  </div>
							  </div>
                              

    
</div>





</div>
<?php include 'Templates/footer.php'; ?>    
</body>
</html>