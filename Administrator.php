<html>
<head>
	<title>Administrators</title>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width , initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  table th{
		color:black;
		background-color:#89CFF0;
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


.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: #474e5d;
  padding-top: 50px;
}


.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
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
  <?php
  include_once "StyleHome.html";?>
  <div class="navbar">
     <a href="Hikerhomepage.php">Home</a></li>
      <a href="Administrator.php">Add/Delete Admins</a>
       <a href="messages.php">Chat</a> 
      <a href="AdminGroups.php">Add/Edit/Delete groups</a>
      <a href="HikersProfiles.php">Hikers Profiles</a>
      <a href="HikersTrips.php">Hikers Trips</a>
      <a href="OrdersSearch.php">Search Orders</a>

  </div>
	<form action="signup.php" method="post">
	<div class ="container, table">
	<h2 style="color:#00008B;text-align:center">Administrators</h2>
	<table class = "table table-hover table-bordered">
		<thead>
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone Number</th>
		<th>Gender</th>
		<th>Penalty</th>
		<th>Delete</th>
	</tr>
	</thead>
	
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hikingpr";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die("fetal error:cannot connect to database");
}
$records = mysqli_query($conn,"select * from user where Type='admin'"); // fetch data from database

while($row = mysqli_fetch_array($records))
{
?>
<tbody>
<tr>
<td><?php echo $row['ID']?></td>
<td><?php echo $row['FirstName']?></td>
<td><?php echo $row['LastName']?></td>
<td><?php echo $row['Email']?></td>
<td><?php echo $row['Password']?></td>
<td><?php echo $row['PhoneNumber']?></td>
<td><?php echo $row['Gender']?></td>
<td><?php echo $row['AddPenalty']?></td>
<td><a href="delete.php?ID=<?php echo $row["ID"]?>">Delete</a></td>
<?php
}
?>

<center><button type="button" class="btn btn-info"  onclick="window.location.href='signup.php'">Add new Adminstrator</button></center>

</form>
</body>
</html>
<html>
<head>
	<title>Administrators</title>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width , initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  table th{
		color:black;
		background-color:#89CFF0;
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
	<form action="signup.php" method="post">
	<div class ="container, table">
	<h2 style="color:#00008B;text-align:center">Administrators</h2>
	<table class = "table table-hover table-bordered">
		<thead>
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone Number</th>
		<th>Gender</th>
		<th>Penalty</th>
		<th>Delete</th>
	</tr>
	</thead>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hikingpr";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die("fetal error:cannot connect to database");
}
$records = mysqli_query($conn,"select * from user where Type='admin'"); // fetch data from database

while($row = mysqli_fetch_array($records))
{
?>
<tbody>
<tr>
<td><?php echo $row['ID']?></td>
<td><?php echo $row['FirstName']?></td>
<td><?php echo $row['LastName']?></td>
<td><?php echo $row['Email']?></td>
<td><?php echo $row['Password']?></td>
<td><?php echo $row['PhoneNumber']?></td>
<td><?php echo $row['Gender']?></td>
<td><?php echo $row['AddPenalty']?></td>
<td><a href="delete.php?ID=<?php echo $row["ID"]?>">Delete</a></td>

<?php
}
?>

<center><button type="button" class="btn btn-info"  onclick="window.location.href='signup.php'">Add new Adminstrator</button></center>

</form>
</body>
</html>
