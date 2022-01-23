<!DOCTYPE html>
<html>
<head>
	<title></title>
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

		/* Styling form-control Class */
		.form-control {
			text-align: left;
			margin-bottom: 25px;
			margin-right: 50px;
		}

		/* Styling form-control Label */
		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		/* Styling form-control input,
		select, textarea */
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

		/* Styling form-control Radio
		button and Checkbox */
		.form-control input[type="radio"],
		.form-control input[type="checkbox"] {
			display: inline-block;
			width: auto;
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
    
//$row=mysqli_fetch_array($result);

	 ?>
<form action="" method="Post" enctype="multipart/form-data">
<div class="container">
<center><h2 style="color:#ff8c00;font:bold;">Suggest a hiking group:</h2></center>
<div class="form-group">
<label style="color:#00008B;font:bold;" for="suggestgroup">Group Name:</label>
<input type="text" name="suggestgroup" class="form-control"required></center>
</br>
<label style="color:#00008B;font:bold;" for="place"><span class="glyphicon glyphicon-map-marker"></span>Group Location:</label>
<input type="text" name="place" class="form-control"required></center>
 <br>
<label style="color:#00008B;font:bold;" for="image">Upload picture for place here:</label>
<input type="file" class="form-control" id="image" name="image" accept="image/png, image/gif, image/jpeg">


</br>
<label style="color:#00008B;font:bold;" for="place">Describtion:</label>
<input type="text" name="desc" class="form-control"required></center>
</br>
<label style="color:#00008B;font:bold;" for="place">Activities Ideas:</label>
<input type="text" name="ideas" class="form-control"required></center>
</br>
 <div class="elem-group inlined">
    <label  style="color:#00008B;font:bold;" for="checkin-date"><span class="glyphicon glyphicon-calendar"></span>Check-in Date</label>
    <input type="date" id="checkin-date" name="checkin" class="form-control">
    <label style="color:#00008B;font:bold;" for="checkout-date"><span class="glyphicon glyphicon-calendar"></span>Check-out Date</label>
    <input type="date" id="checkout-date" name="checkout"class="form-control" >
  </div>
  <center><br><button type="submit" value="Submit" class="btn btn-success" name="Submit" >Submit</button></center>
</div>
</div>
<?php 
if(isset($_POST["Submit"]))
{
	$dir='img/';
	$fileName=$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'], $dir.$fileName);
	$suggestgroup=filter_var($_POST['suggestgroup'],FILTER_SANITIZE_STRING);
$place=filter_var($_POST['place'],FILTER_SANITIZE_STRING);
$desc=filter_var($_POST['desc'],FILTER_SANITIZE_STRING);
$ideas=filter_var($_POST['ideas'],FILTER_SANITIZE_STRING);
$checkin=filter_var($_POST['checkin'],FILTER_SANITIZE_STRING);
$checkout=filter_var($_POST['checkout'],FILTER_SANITIZE_STRING);


$sql="INSERT INTO groupssuggestions(Email,GroupName,GroupLocation,Photo,Describtion,ActivitiesIdeas,CheckinDate,CheckoutDate)VALUES('".$_SESSION['username']."','".$suggestgroup."','".$place."','".$_FILES['image']['name']."','".$desc."','".$ideas."','".$checkin."','".$checkout."')";
    $result=mysqli_query($conn,$sql);
     
  }
  ?>
<script type="text/javascript">
//Date
var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}
</script>
</body>
</html>
