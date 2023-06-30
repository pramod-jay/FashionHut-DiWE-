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
	<h2 class="text-center">Enter your order information</h2>
</div>
<div class="container">
	<div class="jumbotron">
     <?php
            	 if(isset($_GET['error'])){
						?>
						<div class="alert alert-danger" role="alert">Oops! Your Order Faild.</div>
					<?php }
				?>
    
    	<form class="form-horizontal" role="form" action="Logics/logic-order.php" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Full Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Enter Full Name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Address:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtFline" name="txtFline" placeholder="First Line">
          </div>
          <label class="control-label col-sm-2"></label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtSline" placeholder="Second Line">
          </div>
          <label class="control-label col-sm-2"></label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="txtTline" placeholder="Third Line">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Telephone:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtTele" name="txtTele" placeholder="Enter Phone Number">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Email:</label>
          <div class="col-sm-10"> 
            <input type="email" class="form-control" name="txtEmail" placeholder="Enter Email">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Quantity:</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="txtQuantity" name="txtQuantity" placeholder="Enter Quantity">
          </div>
        </div>
        
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" name="btnOrder" onClick="return ValidateForm()">Order</button>
            <button type="reset" class="btn btn-danger">Clear</button>
          </div>
        </div>
        <div class="form-group"> 
          <div class="alert-success"><h2 class="text-center">Cash On Delivery</h2></div>
        </div>
      </form>
        
    </div>
</div>
<?php include 'Templates/footer.php'; ?>
<script>
	function ValidateForm(){
			var isValid=true;
			var name=document.getElementById('txtname').value;
			var fline=document.getElementById('txtFline').value;
			var tele=document.getElementById('txtTele').value;
			var quantity=document.getElementById('txtQuantity').value;
			
				if(name==""){
						alert("Please enter name");
						isValid=false;
					}else if(fline==""){
						alert("Please enter address");
						isValid=false;
						}else if(tele==""){
							alert("Please enter phone number");
							isValid=false;
							}else if(quantity==""){
								alert("Please enter quantity");
								isvalid=false
								}else{isValid=true;
														
								}
	}


</script>
</body>