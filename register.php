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
        <h1 class="text-center">Create your fashionHUT Account</h1>
      </div>
      <div class="col-md-6">
        <img src="Images/Covers/distro-asia-girl.png" style="width:100%; height:100%;"/>
      </div> 
      <div class="col-md-6 jumbotron img-thumbnail">
                  <?php
            	 if(isset($_GET['error'])){
						?>
						<div class="alert alert-danger" role="alert">Oops! Your Registration Faild.</div>
					<?php }
				?>
      		<form class="form-horizontal" role="form" method="post" action="Logics/logic-register.php">
            <div class="form-group">
              <label class="control-label col-sm-2">First Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="txtFname" id="txtFname" placeholder="Enter first name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Last Name:</label>
              <div class="col-sm-10"> 
                <input type="text" class="form-control" name="txtLname" id="txtLname" placeholder="Enter last name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Date Of Birth:</label>
              <div class="col-sm-10"> 
                <input type="date" class="form-control" name="txtDob" id="txtDob" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Home No:</label>
              <div class="col-sm-10"> 
                <input type="text" class="form-control" name="txtHome" id="txtHome" placeholder="Enter Home Number">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Street Name:</label>
              <div class="col-sm-10"> 
                <input type="text" class="form-control" name="txtStreet" id="txtStreet" placeholder="Enter Street Number">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Province:</label>
              <div class="col-sm-10"> 
                <input type="text" class="form-control" name="txtProvince" id="txtProvince"  placeholder="Enter Province">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Mobile Number:</label>
              <div class="col-sm-10"> 
                <input type="text" class="form-control" name="txtMobile" id="txtMobile"  placeholder="Enter Mobile Number">
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-2" >User Name:</label>
              <div class="col-sm-10"> 
                <input type="email" class="form-control" name="txtUname" id="txtUname"  placeholder="Enter User Name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Password:</label>
              <div class="col-sm-10"> 
                <input type="password" class="form-control" name="txtPassword" id="txtPassword"  placeholder="Enter Password">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" >Confirm Password:</label>
              <div class="col-sm-10"> 
                <input type="password" class="form-control" name="txtCpassword" id="txtCpassword"  placeholder="Retype Your Password">
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="btnCreate" onClick="return ValidateForm()">Create Account</button>
                <button type="reset" class="btn btn-danger">Clear</button>
              </div>
            </div>
 
      </div>


<?php include 'Templates/footer.php'; ?>
<script>
	function ValidateForm(){
			var isValid=true;
			var fname=document.getElementById('txtFname').value;
			var lname=document.getElementById('txtLname').value;
			var homen=document.getElementById('txtHome').value;
			var street=document.getElementById('txtStreet').value;
			var province=document.getElementById('txtProvince').value;
			var mobile=document.getElementById('txtMobile');
			var user=document.getElementById('txtUname').value;
			var password=document.getElementById('txtPassword').value;
			var cpassword=document.getElementById('txtCpassword').value;
				if(fname==""){
						alert("Please enter first name");
						isValid=false;
					}else if(lname==""){
						alert("Please enter last name");
						isValid=false;
						}else if(homen==""){
							alert("Please enter home number");
							isValid=false;
							}else if(street==""){
								alert("Please enter street name");
								isvalid=false;
								}else if(province==""){
									alert("Please enter province");
									isvalid=false;
									}else if(mobile==""){
										alert("Please enter mobile number");
										isvalid=false;
										}else if(user==""){
											alert("Please enter user name");
											isvalid=false;
											}else if(password==""){
												alert("Please enter password");
												isValid=false;
												}else if(cpassword==""){
													alert("Please retype password");
													isValid=false;
													}else if(password!=cpassword){
														alert("Password missmatch")
														isValid=false;
														}else{isValid=true;
														
														}
	}


</script>

			

</body>
</html>