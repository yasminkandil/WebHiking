<!DOCTYPE html>
<html>
<head>
	<title>Edit my profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
form {
      background-color: #fff;
      max-width: 1200px;
      margin: 50px auto;
      padding: 30px 20px;
      box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    
    }
body{
background-image: url('image.jpg');
opacity: 2;

}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

/* Float cancel and delete buttons and add an equal width */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
  
	<script>
		function showpass() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
// Get the modal

	</script>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hikingpr";
session_start();
$conn = new mysqli($servername, $username, $password, $dbname);
?>
<form action='' method='Post' enctype='multipart/form-data' class="modal-content" onsubmit='return validate(this)'>

<label style="color:#00008B;" for="pp">Profile Picture:</label>
<br>
<img src="img/<?php echo $_SESSION['Photo'];?>" width="100" height="100">
<br>
<br>
<label style="color:#00008B;" for="uploadPic">Upload your new picture here:</label>
<div class="form-group , ">
	<input type="file" class="form-control" id="image" name="image" accept="image/png, image/gif, image/jpeg" value="<?php echo $_SESSION['Photo'];?>">
	<br>
				<label style="color:#00008B;" for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="name"value="<?php echo $_SESSION['username'];?>" required>

				<label style="color:#00008B;" for="addr">Address:</label>
				<input type="text" class="form-control" id="addr" name="address" value="<?php echo $_SESSION['addr'];?>" required>
				<br>
				<label style="color:#00008B;" for="pass">Password:</label>
				<input type="password" class="form-control" id="pass" name="pass" value="<?php echo $_SESSION['pass'];?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
			<div class="form-check">
  <input class="form-check-input" type="checkbox"  name="show" onclick="showpass()">
  <label style="color:#00008B;" class="form-check-label" for="show">
    Show Password:
  </label>
</div>
<label style="color:#00008B;" for="cpass">Confirm Password:</label>
				<input type="password" class="form-control" id="cpass" name="cpass" value="<?php echo $_SESSION['pass'];?>" required>

				
				<br>
				<label style="color:#00008B;" for="mob">Mobile Number:</label>
				<input type="text" class="form-control" id="mob" name="mobile" value="<?php echo $_SESSION['mob'];?>" required>
<br>
                <button type="submit" class="btn btn-success" name="submitt">Submit</button>
                <button  type="button" id="myBtn" class="btn btn-danger" >Delete</button>
            </div>
        
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
     <h1>Delete Account</h1>
    <p>Are you sure you want to delete your account?
    </p>
    <br>
    <br>
    <br>
    <div class="clearfix">
    <button id="del" name="del" class="deletebtn" onclick="<?php 
    if (isset($_POST["del"])){
$sql2="delete from user where ID =".$_SESSION['ID'];
$result2=mysqli_query($conn,$sql2);
if($result2)
{
	header("Location:HomePage.php");
	//session_destroy();
}
else {
	echo $sql2;
}
}
?>">Delete</button>
    <button id="cl"class="cancelbtn" onclick="modal.style.display ='none'">Cancel</button>
  </div>

  </div>

</div>

</div>
</form>

  <script type="text/javascript">
  	var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btton = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btton.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  </script>
<?php

if(isset($_POST['submitt'])){
$email=filter_var($_POST['name'],FILTER_SANITIZE_EMAIL);
$mob=filter_var($_POST['mobile'],FILTER_SANITIZE_STRING);
$password=filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
$address=filter_var($_POST['address'],FILTER_SANITIZE_STRING);

	$slquery = "SELECT * FROM user WHERE Email = '$email' AND Type='hiker'";
    $selectresult = mysqli_query($conn,$slquery);
	$dir='img/';
	$fileName=$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'], $dir.$fileName);
	 if (mysqli_num_rows($selectresult) > 0) {
        $row = mysqli_fetch_assoc($selectresult);
        if($_POST['name']==isset($row['Email']))
        {
            	?><div class="alert alert-warning alert-dismissible">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

		<strong>This email has an account already</strong>
	</div>
	<?php
            	
        }
    }
    $password=$_POST['pass'];
    $cpassowrd=$_POST['cpass'];
    if($password!=$cpassowrd){
		?>
            	<div class="alert alert-danger alert-dismissible">
            		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
		<strong>The password and the confirm password don't match</strong>
	</div>
            		<?php
	}
    else{
$sql="update user set Email='" .$email. "', Address='" .$address. "', PhoneNumber='" .$mob. "' ,Password='".$password. "',Photo='".$_FILES['image']['name']. "'where ID = '".$_SESSION['ID']."'";
$result=mysqli_query($conn,$sql);
if(!$result){

	die("Unable to execute query");
}
else{
$_SESSION["username"]=$_POST["name"];
$_SESSION["addr"]=$_POST["address"];
$_SESSION["pass"]=$_POST['pass'];
$_SESSION["mob"]=$_POST['mobile'];
$_SESSION["Photo"]=$_POST['image'];
?>
<div class="alert alert-success alert-dismissible">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

		<strong>Profile successfully updated</strong>
	</div>
	<?php
}
}
}
?>
<script>
	function validateUsername(field) {
		if(field=='')
			return 'No UserName was enetered.\n';
		else
			return '';
	}
	function validate(form) {
		fail='';
		fail+=validateUsername(form.name.value);
		if(fail=='')
			{return true;}
		else
			{alert(fail);
				return false;
			}
	}
</script>
</body>
</html>

