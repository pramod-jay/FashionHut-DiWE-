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
<div class="container">
<div class="jumbotron">
<h2>Ad Listening:</h2>
        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="Logics/logic-create.php">
          <div class="form-group">
            <label class="control-label col-sm-2">Title:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtTitle"  name="txtTitle" placeholder="Enter title">
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-2">For Whom:</label>
            <div class="col-sm-10"> 
              <select class="form-control" name="txtWhom" >
						<option>Ladies</option><option>Gents</option><option>Kids</option><option>All</option>
					</select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Category:</label>
            <div class="col-sm-10"> 
              <select class="form-control" name="txtCategory" >
						<option>Trousers</option><option>T-Shirts</option><option>Shirts</option><option>Frocks</option><option>Blouses</option><option>Skirts</option><option>Watches</option><option>Foot Wares</option><option>Suits</option><option>Cosmetics</option>
					</select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Price:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="txtPrice" name="txtPrice" placeholder="Enter Price Rs.">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Size:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtSize" name="txtSize" placeholder="Enter Size (eg:S, M, L, XL, XXL, 28inches, 28cm)">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Photo:</label>
            <div class="col-sm-10">
              <input type="File" class="form-control" id="txtPhoto" name="txtPhoto">
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success" name="btnPost"  onClick="return ValidateForm()">Post</button>
              <button type="reset" class="btn btn-danger">Reset</button>
            </div>
          </div>
        </form>
        <?php 

	 if(isset($_GET['error'])){
		?>
        <div class="alert alert-danger" role="alert">Oops! Your ad is not post.</div>
	<?php }
?>

</div>
</div>




<?php include 'Templates/footer.php'; ?>
<script>
	function ValidateForm(){
			var isValid=true;
			var name=document.getElementById('txtTitle').value;
			var fline=document.getElementById('txtPrice').value;
			var tele=document.getElementById('txtSize').value;
			var quantity=document.getElementById('txtPhoto').value;
			
				if(name==""){
						alert("Please enter title");
						isValid=false;
					}else if(fline==""){
						alert("Please enter price");
						isValid=false;
						}else if(tele==""){
							alert("Please enter size");
							isValid=false;
							}else if(quantity==""){
								alert("Please upload photo");
								isvalid=false
								}else{isValid=true;
														
								}
	}


</script>
</body>
</html>