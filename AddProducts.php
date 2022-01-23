<html>
<head>
	<title>Sign Up Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}
	form {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}
#message p {
  padding: 10px 35px;
  font-size: 18px;
}
a{
	color:darkblue;
	font-size: 20px;
}
a.hover{
	color:black;
	font-size: 20px;
}

	</style>
</head>
<body>
	  <style>
 body{
background-image: url('image.jpg');
 height: 230%; 
  background-repeat: no-repeat;
  background-size: cover;

}
</style>
<script type="text/javascript">
function validateGName(field){
		if(field=='')
			return 'Please enter group name';
		else 
			return "";
	}
	
	function validateGLocation(field){
		if(field=='')
			return "Please enter group location";
		else 
			return "";
	}
	function validateParticipants(field){
		if(field=='')
			return "Please enter number of participants";
		else 
			return "";
	}
	
	function validateDistinationLink(field){
		if(field=='')
			return 'Please enter distination link';
		else 
			return "";
	}

	function validateDiscription(field){
		if(field=='')
			return 'please write discription for youe trip';
		else 
			return "";
	}
	function validateSDate(field){
		if(field=='')
			return 'please enter the starting date of the trip';
		else 
			return "";
	}
	function validatEdate(field){
		if(field=='')
			return 'please enter the ending date of the trip';
		else 
			return "";
	}
	function validatPrice(field){
		if(field=='')
			return 'please enter trip price';
		else 
			return "";
	}
	function validatGuided(field){
		if(field=='')
			return 'please choose whether the trip is guided or not';
		else 
			return "";
	}
	function validatincluds(field){
		if(field=='')
			return 'please enter what the trip include ';
		else 
			return "";
	}
	function validatNotInc(field){
		if(field=='')
			return 'please enter what the trip does not include';
		else 
			return "";
	}
	
	function validate(form){
		fail='';
		fail+=validateGName(form.pass.value);
		fail+=validateGLocation(form.cpass.value);
		fail+=validateParticipants(form.addr.value);
		fail+=validateDistinationLink(form.fname.value);
		fail+=validateDiscription(form.lname.value);
		fail+=validateSDate(form.email.value);
		fail+=validatEdate(form.mob.value);
		fail+=validatPrice(form.mob.value);
		fail+=validatGuided(form.mob.value);
		fail+=validatincluds(form.mob.value);
		fail+=validatNotInc(form.mob.value);


		if(fail==''){
			return true;
		}
		else{
			alert(fail);
			return false;
		}
	}
	
</script>
<?php
  include_once "StyleHome.html";?>
  <div class="navbar">
     <a href="Hikerhomepage.php">Home</a></li>
      <a href="Administrator.php">Add/Delete Admins</a>
       <a href="messages.php">Chat</a> 
      <a href="AdminGroups.php">Add/Edit/Delete groups</a>
      <a href="AllProducts.php">Add/Edit/Delete Products</a>
      <a href="HikersProfiles.php">Hikers Profiles</a>
      <a href="HikersTrips.php">Hikers Trips</a>
      <a href="OrdersSearch.php">Search Orders</a>

  </div>
<div class="container">
	<div class="form-group">
<form action="" method="Post" enctype="multipart/form-data" onsubmit='return validate(this)'>
<br><br><br>
<h2 style="color:#ff8c00;font:bold; text-align: center;">Create Product</h2>

<label style="color:#00008B;font:bold;" for="pname">Product Name:</label>
<input type="text" name="pname" placeholder="Enter name" title="please enter your group name" class="form-control"required>

<label style="color:#00008B;font:bold;" for="pdesc">Product Describtion:</label>
<input type="text" name="pdesc" placeholder="Enter location" title="please enter group location" class="form-control"required>
<br>
<label style="color:#00008B;font:bold;" for="price">Product Price:</label>
<input type="text" name="price" placeholder="Enter number of participants" class="form-control" required></center>
	<br>

<label style="color:#00008B;font:bold" for="mimg">Upload main picture here:</label>
<input type="file" class="form-control" id="mimg" name="mimg" accept="image/png, image/gif, image/jpeg">

	<br>
	

	    <br><button type="submit" value="Create" class="btn btn-success" name="Create" >Create</button> 
	    <button class="btn btn-danger" type="reset">Reset</button>
	    <br><br>
	    <center>
	    	<h2>
		<br>
		<a href="Hikerhomepage.php">Home Page</a>
	</h2>
	</center>
	</div>
</div>
</form>
<?php

function OurError($errno,$errstr){
	echo "ERROR $errstr";
	die();
}
set_error_handler("OurError",E_USER_WARNING);

if(isset($_POST["Create"]))
{
$dir='img/';
	$fileName1=$_FILES['mimg']['name'];
	move_uploaded_file($_FILES['mimg']['tmp_name'], $dir.$fileName1);
	
	
$ProductN=filter_var($_POST['pname'],FILTER_SANITIZE_STRING);
$ProductD=filter_var($_POST['pdesc'],FILTER_SANITIZE_STRING);
$ProductPrice=filter_var($_POST['price'],FILTER_SANITIZE_STRING);

$conn=new mysqli("localhost","root","","hikingpr");
if(isset($_POST['Create'])){

      $sql="INSERT INTO tbl_product(name,descr,price,image) VALUES (
      '".$ProductN."','".$ProductD."','".$ProductPrice."','".$_FILES['mimg']['name']."')" ;
      echo "$sql";
      $result=mysqli_query($conn,$sql);
      try{
      if (!$result) 
      	throw new Exception("Error");
      	
      }
      catch(Exception $e)
      {
      	echo "Message:",$e->getMessage();
      }
           	echo "<div class='alert alert-success alert-dismissible'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>You have added your group successfully!</strong>
	             </div>";
            		header("AllProducts.php");

    }
	 
}




?>
</body>
</html>