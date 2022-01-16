<!DOCTYPE html>
<html>
<head>
	<title>Suggestion Form</title>
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
		.form-control select,
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
	session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $database="hikingpr";
    $conn=mysqli_connect($servername,$username,$password,$database);
	 ?>

<form action="" method="Post" enctype="multipart/form-data">
<div class="container">
	<h2 style="color:#ff8c00;font:bold;"><center>Respond Form</center></h2>
<div class="form-group">
<label style="color:#00008B;font:bold;" for="Email" ><span class="glyphicon glyphicon-envelope"></span> Email:</label>
<input type="text" name="Email" class="form-control" value= "<?php echo $_SESSION['username'] ?>"></center>
</br>
<label style="color:#00008B;font:bold;" for="Message">Message:</label>
<input type="text" name="Message" class="form-control"required></center>
 <br>
  <center><br><button type="submit" value="Submit" class="btn btn-success" name="Submit" >Submit</button></center>
</div>
</div>
<?php 
if(isset($_POST["Submit"]))
{
	$Email=filter_var($_POST['Email'],FILTER_SANITIZE_STRING);
$Message=filter_var($_POST['Message'],FILTER_SANITIZE_STRING);

$sql="INSERT INTO adminresponse(Email,Message)VALUES('".$Email."','".$Message."')";
    $result=mysqli_query($conn,$sql);
     
  }
  ?>
</body>
</html>