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
 height: 200%; 
  background-repeat: no-repeat;
  background-size: cover;

}
</style>
<script type="text/javascript">
function validateEmail(field){
		if(field=='')
			return 'Please enter an Email';
		else 
			return "";
	}
	
	function validateFName(field){
		if(field=='')
			return "Please write your First Name";
		else 
			return "";
	}
	function validateLName(field){
		if(field=='')
			return "Please write your Last Name";
		else 
			return "";
	}
	
	function validateAddress(field){
		if(field=='')
			return 'Please enter your address';
		else 
			return "";
	}

	function validatePassword(field){
		if(field=='')
			return 'please write a password for your account';
		else 
			return "";
	}
	function validateCPassword(field){
		if(field=='')
			return 'please confirm your password';
		else 
			return "";
	}
	function validateMob(field){
		if(field=='')
			return 'please enter your phone number';
		else 
			return "";
	}
	/*function checkpassword(){
		if(form.cpass.value!=form.pass.value){
		 alert("The two passwords don't match");
		}*/
		
	function validate(form){
		fail='';
		fail+=validatePassword(form.pass.value);
		fail+=validateCPassword(form.cpass.value);
		fail+=validateAddress(form.addr.value);
		fail+=validateFName(form.fname.value);
		fail+=validateLName(form.lname.value);
		fail+=validateEmail(form.email.value);
		fail+=validateEmail(form.mob.value);
		

		if(fail==''){
			return true;
		}
		else{
			alert(fail);
			return false;
		}
	}
	function showpass() {
  var x = document.getElementById("passs");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
/*function thanks(){
	alert("you have created an account successfully ");
}*/
</script>
<div class="container">
	<div class="form-group">
<form action="" method="Post" enctype="multipart/form-data" onsubmit='return validate(this)'>
<br><br><br>
<h2 style="color:#ff8c00;font:bold; text-align: center;">Create Account</h2>
<label style="color:#00008B;font:bold;" for="fname"><span class="glyphicon glyphicon-user"></span> First Name:</label>
<input type="text" name="fname" placeholder="Enter name" title="please enter your name" class="form-control"required>
<label style="color:#00008B;font:bold;" for="lname"><span class="glyphicon glyphicon-user"></span> Last Name:</label>
<input type="text" name="lname" placeholder="Enter family name" title="please enter your name" class="form-control"required>
<br>
<label style="color:#00008B;font:bold;" for="email"><span class="glyphicon glyphicon-envelope"></span> Email:</label>
<input type="email" name="email" placeholder="Enter Email" class="form-control" required></center>
	<br>
<label style="color:#00008B;font:bold;" for="addr"><span class="glyphicon glyphicon-home"></span> Address:</label>
<input type="text" name="addr" placeholder="Enter Your Address" class="form-control" required></center>
	<br>
<label style="color:#00008B;font:bold;" for="pass"><span class="glyphicon glyphicon-lock"></span> Password:</label>
<input type="password" name="pass" id="passs" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" placeholder="Enter a password"required>
<div class="form-check">
  <input class="form-check-input" type="checkbox"  name="show" onclick="showpass()">
  <label style="color:#00008B;" class="form-check-label" for="show">
    <span class="glyphicon glyphicon-eye-open"></span> Show Password:
  </label>
</div>
<label style="color:#00008B;font:bold;" for="cpass"><span class="glyphicon glyphicon-lock"></span> Confirm Password:</label>
<input type="password" name="cpass" placeholder="confirm password" class="form-control" required></center>
	<br>
	<label style="color:#00008B;font:bold;" for="mob"><span class="glyphicon glyphicon-phone"></span> Mobile:</label>
<input type="text" name="mob" placeholder="Enter Mobile number" class="form-control" required></center>
	<br>
	 <label style="color:#00008B;font:bold" class="mr-sm-2" for="Days"> Type:</label>
	<div class="col-auto my-1">
	<select class="custom-select mr-sm-2" name="typee" required>
		<?php
		$typee=array('hiker','admin');
		for($i=0;$i<count($typee);$i++)
			echo "<option>".$typee[$i]."</option>";
		?>
		
	</select>
	<br>
<label style="color:#00008B;font:bold" for="uploadPic"><span class="glyphicon glyphicon-camera"></span> Upload your new picture here:</label>
<input type="file" class="form-control" id="img" name="img" accept="image/png, image/gif, image/jpeg">

    <br>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="g" id="Radio1" value="Male">
  <label style="color:#00008B;font:bold" class="form-check-label" for="Radio1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="g" id="Radio2" value="Female">
  <label style="color:#00008B;font:bold" class="form-check-label" for="Radio2">
    Female
  </label>
</div>
		
	    	<?php
           $days = array();
           for ($x = 1; $x <= 31; $x++)
            {
             array_push($days, $x);
            }
            ?>
	 <label style="color:#00008B;font:bold" class="mr-sm-2" for="Days"> <span class="glyphicon glyphicon-calendar"></span> Choose your Birthday:</label>
	<div class="col-auto my-1">
	<select class="custom-select mr-sm-2" name="Days" required>
		<?php
		for($i=0;$i<count($days);$i++)
			echo "<option>".$days[$i]."</option>";
		?>
		
	</select>
	<?php
		$months=array('Jan','Feb','March','April','May','June','July','Aug','Sep','Oct','Nov','Dec');
		?>
	<select name="Months" class="custom-select mr-sm-2" required>
		
		<?php
		for($i=0;$i<count($months);$i++)
			echo "<option>".$months[$i]."</option>";
		?>
	</select>
	<?php
           $years = array();
           for ($x = 1975; $x <= 2004; $x++)
            {
             array_push($years, $x);
            }
            ?>
	<select name="Years" class="custom-select mr-sm-2" required>
		
		<?php
		for($i=0;$i<count($years);$i++)
			echo "<option>".$years[$i]."</option>";?>
	</select>
</div>
	<br>
	

	    <br><button type="submit" value="SignUp" class="btn btn-success" name="signed" >Sign Up</button> <button class="btn btn-danger" type="reset">Reset</button>
	    <br><br>
	    <center>
	    	<h2>
		<a href="log.php">Go to login page</a>
		<br>
		<a href="Hikerhomepage.php">Home Page</a>
	</h2>
	</center>
	</div>
</div>
</form>
<?php

//echo $target_file;

if(isset($_POST["signed"]))
{
$dir='img/';
	$fileName=$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'], $dir.$fileName);
$fname=filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
$lname=filter_var($_POST['lname'],FILTER_SANITIZE_STRING);
$email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$mob=filter_var($_POST['mob'],FILTER_SANITIZE_STRING);
$password=filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
$cpassowrd=filter_var($_POST['cpass'],FILTER_SANITIZE_STRING);
$address=filter_var($_POST['addr'],FILTER_SANITIZE_STRING);
$gender=filter_var($_POST['g'],FILTER_SANITIZE_STRING);
$day=filter_var($_POST['Days'],FILTER_SANITIZE_STRING);
$month=filter_var($_POST['Months'],FILTER_SANITIZE_STRING);
$year=filter_var($_POST['Years'],FILTER_SANITIZE_STRING);
$BD = new DateTime($day.$month.$year);
$Curr = new Datetime(date('m.d.y'));
$diff = $Curr->diff($BD);
$age=$diff->y;
//include_once("conn.php");
$conn=new mysqli("localhost","root","","hikingpr");
$slquery = "SELECT * FROM user WHERE Email = '$email'";
$selectresult = mysqli_query($conn,$slquery);
if(isset($_POST['signed'])){
	$row = mysqli_fetch_assoc($selectresult);
	if(empty($_POST['email']))
	{
		$errormessage="Email is required";
	}

    if (mysqli_num_rows($selectresult) > 0) {
        
        
        if($email==isset($row['Email']))
        {
           ?><div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>This email has an account already!</strong>
	</div>
	<?php
            	
        }
    }
	if($password!=$cpassowrd){
	
            	?>
            	<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>The password and the confirm password don't match!</strong>
	</div>
            		<?php
	}
	else
	{
		if($_POST['typee']=='hiker'){
			$hiker="hiker";
      $sql="INSERT INTO user(FirstName,LastName,Email,Password,PhoneNumber,Address,Photo,Age,Gender,type) VALUES (
      '".$fname."','".$lname."','".$email."','".$password."','".$mob."','".$address."','".$_FILES['img']['name']."','".$age."','".$gender."','".$hiker."')" ;
      echo "$sql";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
      
      	?>
            	<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>You have created your account successfully!</strong>
	</div>
            		<?php
            		header("Location:Hikerhomepage.php");
      }

    }
	    

    if($_POST['typee']=='admin'){
	$admin='admin';
	 $sql="INSERT INTO user(FirstName,LastName,Email,Password,PhoneNumber,Address,Photo,Age,Gender,type) VALUES (
      '".$fname."','".$lname."','".$email."','".$password."','".$mob."','".$address."','".$_FILES['img']['name']."','".$age."','".$gender."','".$admin."')" ;
      echo "$sql";
      $result=mysqli_query($conn,$sql);
      if($result)
      {

      
      	?>
            	<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>You have created your account successfully!</strong>
	</div>
            		<?php
            		header("Hikerhomepage.php");
            		
      }

    }

}	    
}
}



?>
</body>
</html>