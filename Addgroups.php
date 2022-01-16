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
opacity: 2;

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
	/*function checkpassword(){
		if(form.cpass.value!=form.pass.value){
		 alert("The two passwords don't match");
		}*/
		
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
	/*function showpass() {
  var x = document.getElementById("passs");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}*/
/*function thanks(){
	alert("you have created an account successfully ");
}*/
</script>
<div class="container">
	<div class="form-group">
<form action="" method="Post" enctype="multipart/form-data" onsubmit='return validate(this)'>
<br><br><br>
<h2 style="color:#00008B;font:bold; text-align: center;">Create Group</h2>

<label style="color:#00008B;font:bold;" for="gname">Group Name:</label>
<input type="text" name="gname" placeholder="Enter name" title="please enter your group name" class="form-control"required>

<label style="color:#00008B;font:bold;" for="groupL">Group Location:</label>
<input type="text" name="groupL" placeholder="Enter location" title="please enter group location" class="form-control"required>
<br>
<label style="color:#00008B;font:bold;" for="participants">Participants:</label>
<input type="text" name="participants" placeholder="Enter number of participants" class="form-control" required></center>
	<br>
<label style="color:#00008B;font:bold;" for="Dlink">Distination Link:</label>
<input type="text" name="Dlink" placeholder="Enter Distination Link " class="form-control" required></center>
	<br>
<label style="color:#00008B;font:bold;" for="desc">Description:</label>
<input type="text" name="desc" placeholder="Enter trip Description  " class="form-control" required></center>
	<br>
<div class="form-check">
  <input class="form-check-input" type="checkbox"  name="Guided" >
  <label style="color:#00008B;" class="form-check-label" >
    Guided?:
  </label>
</div>
<label style="color:#00008B;font:bold;" for="placeN">Place Name:</label>
<input type="text" name="placeN" placeholder="Enter place name" class="form-control" required></center>
	<br>
	<div class="elem-group inlined">
    <label  style="color:#ff8c00;font:bold;" for="checkin-date"><span class="glyphicon glyphicon-calendar"></span>Check-in Date</label>
    <input type="date" id="checkin-date" name="checkin" class="form-control">
    <label  style="color:#ff8c00;font:bold;" for="checkout-date"><span class="glyphicon glyphicon-calendar"></span>Check-out Date</label>
    <input type="date" id="checkout-date" name="checkout"class="form-control" >
  </div>
	<label style="color:#00008B;font:bold;" for="price">Price:</label>
<input type="text" name="price" placeholder="Enter price in EGP" class="form-control" required></center>
	<br>
	 <label style="color:#00008B;font:bold;" for="included">trip includings :</label>
<input type="text" name="included" placeholder="trip includes..." class="form-control" required></center>
	<br>
	<label style="color:#00008B;font:bold;" for="Notincluded">trip not includings :</label>
<input type="text" name="Notincluded" placeholder="trip does not includes..." class="form-control" required></center>
	<br>
	<label style="color:#00008B;font:bold;" for="otherT">other tips :</label>
<input type="text" name="otherT" placeholder="other tips" class="form-control" required></center>
	<br>

<label style="color:#00008B;font:bold" for="uploadPic">Upload main picture here:</label>
<input type="file" class="form-control" id="mimg" name="mimg" accept="image/png, image/gif, image/jpeg">
<label style="color:#00008B;font:bold" for="uploadPic">Upload picture 2 here:</label>
<input type="file" class="form-control" id="img2" name="img2" accept="image/png, image/gif, image/jpeg">
<label style="color:#00008B;font:bold" for="uploadPic">Upload picture 3 here:</label>
<input type="file" class="form-control" id="img3" name="img3" accept="image/png, image/gif, image/jpeg">
<label style="color:#00008B;font:bold" for="uploadPic">Upload picture 4 here:</label>
<input type="file" class="form-control" id="img4" name="img4" accept="image/png, image/gif, image/jpeg">
<label style="color:#00008B;font:bold" for="uploadPic">Upload picture 5 here:</label>
<input type="file" class="form-control" id="img5" name="img5" accept="image/png, image/gif, image/jpeg">
    <br>
	<br>
	

	    <br><button type="submit" value="Create" class="btn btn-success" name="Create" >Create</button> 
	    <button class="btn btn-danger" type="reset">Reset</button>
	    <br><br>
	    <center>
	    	<h2>
		<br>
		<a href="HomePage.php">Home Page</a>
	</h2>
	</center>
	</div>
</div>
</form>
<?php

//echo $target_file;

if(isset($_POST["Create"]))
{
$dir='img/';
	$fileName1=$_FILES['mimg']['name'];
	move_uploaded_file($_FILES['mimg']['tmp_name'], $dir.$fileName1);
	
	$fileName2=$_FILES['img2']['name'];
	move_uploaded_file($_FILES['img2']['tmp_name'], $dir.$fileName2);

	$fileName3=$_FILES['img3']['name'];
	move_uploaded_file($_FILES['img3']['tmp_name'], $dir.$fileName3);

	$fileName4=$_FILES['img4']['name'];
	move_uploaded_file($_FILES['img4']['tmp_name'], $dir.$fileName4);

	$fileName5=$_FILES['img5']['name'];
	move_uploaded_file($_FILES['img5']['tmp_name'], $dir.$fileName5);
	
$GroupName=filter_var($_POST['gname'],FILTER_SANITIZE_STRING);
$GroupLocation=filter_var($_POST['groupL'],FILTER_SANITIZE_STRING);
$Participants=filter_var($_POST['participants'],FILTER_SANITIZE_EMAIL);
$Dlink=filter_var($_POST['Dlink'],FILTER_SANITIZE_STRING);
$desc=filter_var($_POST['desc'],FILTER_SANITIZE_STRING);
$Guided=filter_var($_POST['Guided'],FILTER_SANITIZE_STRING);
$PlaceName=filter_var($_POST['placeN'],FILTER_SANITIZE_STRING);
$TripStart=filter_var($_POST['checkin'],FILTER_SANITIZE_STRING);
$TripEnd=filter_var($_POST['checkout'],FILTER_SANITIZE_STRING);
$Price=filter_var($_POST['price'],FILTER_SANITIZE_STRING);
$included=filter_var($_POST['included'],FILTER_SANITIZE_STRING);
$notIncluded=filter_var($_POST['Notincluded'],FILTER_SANITIZE_STRING);
$otherTips=filter_var($_POST['otherT'],FILTER_SANITIZE_STRING);


//include_once("conn.php");

$conn=new mysqli("localhost","root","","hikingpr");
if(isset($_POST['Create'])){

      $sql="INSERT INTO groups(GroupName,GroupLocation,Participants,DestinationLink,Describtion,Guided,PlaceName,mainphoto,Photo1,Photo2,Photo3,Photo4,TripStart,TripEnd,Price,included,notIncluded,otherTips) VALUES (
      '".$GroupName."','".$GroupLocation."','".$Participants."','".$Dlink."','".$desc."','".$Guided."','".$PlaceName."',
      '".$_FILES['mimg']['name']."','".$_FILES['img2']['name']."','".$_FILES['img3']['name']."','".$_FILES['img4']['name']."',
      '".$_FILES['img5']['name']."','".$TripStart."','".$TripEnd."','".$Price."','".$included."','".$notIncluded."','".$otherTips."')" ;
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
      }

    }
	 
}




?>
</body>
</html>