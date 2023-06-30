<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css"/>
<title>FashionHut|SriLanka'sLargestFashionSite</title>
<link rel="shortcut icon" type="image/png" href="Images/Logo/favicon.JPG"/>
</head>
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
                        <img src="Images/Covers/Fashion1.jpg" style="height:400px; width:100%;">
                    </div>

                    <div class="item">
                        <img src="Images/Covers/4b50d337a68a84706f74735db759cfe72a467a30.jpg" style="height:400px; width:100%;">
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
</div>
    <ul class="nav nav-pills nav-justified">
		 	<li role="presentation" style="font-size:18px;" class="active"><a href="ladies.php">Ladies</a></li>
  			<li role="presentation" style="font-size:18px;"><a href="gents.php">Gents</a></li>
  			<li role="presentation" style="font-size:18px;"><a href="kids.php">Kids</a></li>
	</ul>
<?php include 'dbconfig.php'; ?>
<h2 class="text-center">Skirts</h2>
<div class="col-md-12 container jumbotron" style="float:right;" style="margin-top::20px;">


		<?php
                    $sql = "SELECT title,whom,category,price,size,photo FROM fashionhut.`create-add` WHERE whom='Ladies' && category='Skirts';";
        
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
                              <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
                              <div style="margin-left:auto; margin-right:auto; width:25%;"> 
                                  <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
                              </div>
                          </div>
        
                <?php	  }
                  }else{
                      echo "0 results";
                  }
            
        ?>

</div>



<h2 class="text-center">Frocks</h2>
<div class="col-md-12 container jumbotron" style="float:right;" style="margin-top::20px;">


		<?php
                    $sql = "SELECT title,whom,category,price,size,photo FROM fashionhut.`create-add` WHERE whom='Ladies' && category='Frocks';";
        
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
                              <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
                              <div style="margin-left:auto; margin-right:auto; width:25%;"> 
                                  <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
                              </div>
                          </div>
        
                <?php	  }
                  }else{
                      echo "0 results";
                  }
            
        ?>

</div>


<h2 class="text-center">Blouses</h2>
<div class="col-md-12 container jumbotron" style="float:right;" style="margin-top::20px;">


		<?php
                    $sql = "SELECT title,whom,category,price,size,photo FROM fashionhut.`create-add` WHERE whom='Ladies' && category='Blouses';";
        
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
                              <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
                              <div style="margin-left:auto; margin-right:auto; width:25%;"> 
                                  <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
                              </div>
                          </div>
        
                <?php	  }
                  }else{
                      echo "0 results";
                  }
            
        ?>

</div>


<h2 class="text-center">Trousers</h2>
<div class="col-md-12 container jumbotron" style="float:right;" style="margin-top::20px;">


		<?php
                    $sql = "SELECT title,whom,category,price,size,photo FROM fashionhut.`create-add` WHERE whom='Ladies' && category='Trousers';";
        
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
                              <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
                              <div style="margin-left:auto; margin-right:auto; width:25%;"> 
                                  <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
                              </div>
                          </div>
        
                <?php	  }
                  }else{
                      echo "0 results";
                  }
            
        ?>

</div>



<h2 class="text-center">T-Shirts</h2>
<div class="col-md-12 container jumbotron" style="float:right;" style="margin-top::20px;">


		<?php
                    $sql = "SELECT title,whom,category,price,size,photo FROM fashionhut.`create-add` WHERE whom='Ladies' && category='T-Shirts';";
        
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
                              <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
                              <div style="margin-left:auto; margin-right:auto; width:25%;"> 
                                  <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
                              </div>
                          </div>
        
                <?php	  }
                  }else{
                      echo "0 results";
                  }
            
        ?>

</div>


<h2 class="text-center">Watches</h2>
<div class="col-md-12 container jumbotron" style="float:right;" style="margin-top::20px;">


		<?php
                    $sql = "SELECT title,whom,category,price,size,photo FROM fashionhut.`create-add` WHERE whom='Ladies' && category='Watches';";
        
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
                              <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
                              <div style="margin-left:auto; margin-right:auto; width:25%;"> 
                                  <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
                              </div>
                          </div>
        
                <?php	  }
                  }else{
                      echo "0 results";
                  }
            
        ?>

</div>



<h2 class="text-center">Foot Wares</h2>
<div class="col-md-12 container jumbotron" style="float:right;" style="margin-top::20px;">


		<?php
                    $sql = "SELECT title,whom,category,price,size,photo FROM fashionhut.`create-add` WHERE whom='Ladies' && category='Foot Wares';";
        
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
                              <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
                              <div style="margin-left:auto; margin-right:auto; width:25%;"> 
                                  <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
                              </div>
                          </div>
        
                <?php	  }
                  }else{
                      echo "0 results";
                  }
            
        ?>

</div>


<h2 class="text-center">Cosmetics</h2>
<div class="col-md-12 container jumbotron" style="float:right;" style="margin-top::20px;">


		<?php
                    $sql = "SELECT title,whom,category,price,size,photo FROM fashionhut.`create-add` WHERE whom='Ladies' && category='Cosmetics';";
        
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
                              <h6 style="text-align:center;"><?php echo $row['size']; ?></h6>
                              <div style="margin-left:auto; margin-right:auto; width:25%;"> 
                                  <a href="order.php"> <button type="submit" class="btn btn-success">Buy It Now</button></a>
                              </div>
                          </div>
        
                <?php	  }
                  }else{
                      echo "0 results";
                  }
            
        ?>

</div>

<?php include 'Templates/footer.php'; ?>
<body>
</body>
</html>