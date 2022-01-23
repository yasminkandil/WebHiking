<!DOCTYPE html>
<html>
<head>
	<title>Send request to HR</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	body{
	background-image: url('image.jpg');
}
		form {
			background-color: #fff;
			max-width: 1200px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		
		}

		.form-control {
			text-align: left;
			margin-bottom: 25px;
			margin-right: 50px;
		}

		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		.form-control input,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 1px;
			font-family: inherit;
			padding: 5px;
			display: block;
			width: 95%;
		}

		div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}
	</style>
</head>
<body>
	<?php 
$servername="localhost";
    $username="root";
    $password="";
    $database="hikingpr";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(isset($_POST["Submit"]))
{
	
	$fname=filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
	$lname=filter_var($_POST['lname'],FILTER_SANITIZE_STRING);
	$reason=filter_var($_POST['reason'],FILTER_SANITIZE_STRING);
	$Email=filter_var($_POST['Email'],FILTER_SANITIZE_STRING);
    $penalty=filter_var($_POST['penalty'],FILTER_SANITIZE_STRING);

$sql="INSERT INTO investigations(FName,LName,Email,Reason,Penalty)VALUES('".$fname."','".$lname."','".$Email."','".$reason."','".$penalty."')";
    $result=mysqli_query($conn,$sql);
     
  }
    ?>
<form action="" method="post">
<div class="container">
	<div class="form-group">
<h2 style="color:#00008B;font:bold;">Send Investigation request to HR:</h2>

<label style="color:#ff8c00;font:bold;" for="fname">First Name of admin:</label>
<input type="text" name="fname" class="form-control w-50"required>
</br>
<label style="color:#ff8c00;font:bold;" for="lname">Last Name of admin:</label>
<input type="text" name="lname" class="form-control w-50"required>
</br>
<label style="color:#ff8c00;font:bold;" for="Email">Email of admin:</label>
<input type="text" name="Email" class="form-control w-50"required>
</br>
<label style="color:#ff8c00;font:bold;" for="penalty">Penalty:</label>
<input type="text" name="penalty" class="form-control w-50"required>
<label style="color:#ff8c00;font:bold;" for="reason">Reason of adding penalty:</label>
<input type="text" name="reason" class="form-control w-50"required>
<center><br><button type="submit" value="Submit" class="btn btn-info" name="Submit" >Send</button></center>
 <br>
</div>
</div>
</form>
</body>
</html>