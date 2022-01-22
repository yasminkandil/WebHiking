<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="styles.css">

	<style type="text/css">

html,body{
background-image: url('image.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: #fff ,opacity:0.5;

}

.card-header h3{
color: darkblue;
}

.input-group-prepend span{
width: 50px;
background-color: #FFA500;
color: black;
border:0;
}

input:focus{
outline: 0 0 0 0 ;
box-shadow: 0 0 0 0 ;

}



.login_btn{
color: black;
background-color: #FFA500;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
color:#FFA500;
}
.links a:hover{
	color:black;
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
	</style>
	
</head>
<body>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hikingpr";
$conn = new mysqli($servername, $username, $password, $dbname);
 $status = "Active now";
if(isset($_POST['loginn'])){
	$_SESSION['username']=filter_var($_POST['username'],FILTER_SANITIZE_EMAIL);
	$_SESSION['pass']=filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
	$sql="SELECT * FROM user WHERE Email='".$_POST['username']."' AND Password='".$_POST['pass']."' AND Type='hiker'";
	$sql2="SELECT * FROM user WHERE Email='".$_POST['username']."' AND password='".$_POST['pass']."' AND Type='admin'";
	$sql3="SELECT * FROM user WHERE Email='".$_POST['username']."' AND password='".$_POST['pass']."' AND Type='auditor'";
	$sql4="SELECT * FROM user WHERE Email='".$_POST['username']."' AND password='".$_POST['pass']."'AND Type='HR'";
	$result = mysqli_query($conn,$sql);
	$result1=mysqli_query($conn,$sql2);	
	$result2=mysqli_query($conn,$sql3);	
	$result3=mysqli_query($conn,$sql4);		


	if($row=mysqli_fetch_array($result))//hiker	
	{
			$status = "Active now";
    $sql2 = mysqli_query($conn, "UPDATE user SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
		$_SESSION['ID']=$row[0];
		$_SESSION['username']=$row['Email'];
		$_SESSION['fname']=$row['FirstName'];
		$_SESSION['pass']=$row['Password'];
		$_SESSION['addr']=$row['Address'];
		$_SESSION['mob']=$row['PhoneNumber'];
		$_SESSION['Photo']=$row['Photo'];
		$_SESSION['type']=$row['Type'];
		$_SESSION['status']=$row['status'];
	  $_SESSION['unique_id'] = $row['unique_id'];
		header("Location:Hikerhomepage.php");
	}
	else if($row=mysqli_fetch_array($result1)){//admin
		$status = "Active now";
    $sql2 = mysqli_query($conn, "UPDATE user SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
       $_SESSION['ID']=$row[0];
		$_SESSION['username']=$row['Email'];
		$_SESSION['fname']=$row['FirstName'];
		$_SESSION['pass']=$row['Password'];
		$_SESSION['addr']=$row['Address'];
		$_SESSION['mob']=$row['PhoneNumber'];
		$_SESSION['Photo']=$row['Photo'];
		$_SESSION['type']=$row['Type'];
	$_SESSION['status']=$row['status'];
	  $_SESSION['unique_id'] = $row['unique_id'];
		header("Location:Hikerhomepage.php");
	}
	else if($row=mysqli_fetch_array($result2)){
      $_SESSION['ID']=$row[0];
		$_SESSION['username']=$row['Email'];
		$_SESSION['fname']=$row['FirstName'];
		$_SESSION['pass']=$row['Password'];
		$_SESSION['addr']=$row['Address'];
		$_SESSION['mob']=$row['PhoneNumber'];
		$_SESSION['Photo']=$row['Photo'];
		$_SESSION['type']=$row['Type'];

		header("Location:Hikerhomepage.php");
	}
	else if($row=mysqli_fetch_array($result3)){
        $_SESSION['ID']=$row[0];
		$_SESSION['username']=$row['Email'];
		$_SESSION['fname']=$row['FirstName'];
		$_SESSION['pass']=$row['Password'];
		$_SESSION['addr']=$row['Address'];
		$_SESSION['mob']=$row['PhoneNumber'];
		$_SESSION['Photo']=$row['Photo'];
		$_SESSION['type']=$row['Type'];

		header("Location:Hikerhomepage.php");
	}
	else	
	{
				 trigger_error("<div class='alert alert-danger alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<strong>Invalid username or password!</strong>
	</div>",E_USER_WARNING);
            	
	}
}
?>
	<script type="text/javascript">
	function validateEmail(field){
		if(field=='')
			return 'no username was entered';
		else 
			return "";
	}
	
	function validatePassword(field){
		if(field=='')
			return 'no Password was entered';
		else 
			return "";
	}
	function validate(form){
		fail='';
		fail+=validatePassword(form.pass.value);
		fail+=validateEmail(form.username.value);
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
</script>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
			</div>
			<div class="card-body">
				<form action="" method="Post" onsubmit="return validate(this)">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" name="username" placeholder="Enter Username" class="form-control" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="pass" id="passs" class="form-control" placeholder="Enter Password" required></center>
	<button type="button" class="btn btn-default btn-sm" onclick="showpass()">
          <span class="glyphicon glyphicon-eye-open"></span> Show Password
        </button>
					</div>
					<div class="form-group">
						<input type="submit" name="loginn" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<h6 style="color:darkblue;">Don't have an account?</h6>
				
					<a href="Signup.php">Sign Up</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>
