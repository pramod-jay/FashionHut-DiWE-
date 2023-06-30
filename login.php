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
      <div class="page-header">
        <h1 class="text-center">Login to your fashionHUT Account </h1>
      </div>
      <div class="col-md-6">
        <img src="Images/Covers/free-vector-women-vector-fashion-shopping_027817_Girls vector (3).png" style="width:100%; height:100%;"/>
      </div> 
      <div class="col-md-6 jumbotron img-thumbnail">
      		<form class="form-horizontal" role="form" method="post" action="Logics/logic-login.php">
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="txtEmail" placeholder="Enter email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
              <div class="col-sm-10"> 
                <input type="password" class="form-control" name="txtPassword" placeholder="Enter password">
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
                <button type="reset" class="btn btn-danger">Clear</button>
              </div>
            </div>
             <?php
            	 if(isset($_GET['error'])){
						?>
						<div class="alert alert-danger" role="alert">Oops! Your user name or password invalid.</div>
					<?php }else if(isset($_GET['success'])){
						header("location: index.php");
						}
				?>
 
      </div>


<?php include 'Templates/footer.php'; ?>
</body>
</html>