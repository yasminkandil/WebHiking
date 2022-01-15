<!DOCTYPE html>
<html>
<head>
	<title>Hikers Profiles</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
	table th{
		color:black;
		background-color:#89CFF0;
	}
</style>
</head>
<body>

<div class="container,table">
	<h2 style="color:#00008B;text-align:center;">Hikers Profiles</h2>
	<table class="table table-striped table-bordered">
		<thead><tr>
			<th>ID</th>
			<th>Profile Picture</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Group Number</th>
			<th>Age</th>
			<th>Gender</th>
		
		</tr>
	</thead>
	<tbody>
		<?php
$db = mysqli_connect("localhost","root","","hikingpr");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
$records = mysqli_query($db,"select * from user where Type='hiker'"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['ID']; ?></td>
    <td><img src="img/<?php echo $data['Photo']; ?>" width="100" height="100"></td>
    <td><?php echo $data['FirstName']; ?></td>
    <td><?php echo $data['LastName']; ?></td>
    <td><?php echo $data['Address']; ?></td>
    <td><?php echo $data['Email']; ?></td>
    <td><?php echo $data['PhoneNumber']; ?></td>
    <td><?php echo $data['GroupNumb']; ?></td>
    <td><?php echo $data['Age']; ?></td>
    <td><?php echo $data['Gender']; ?></td>
  </tr>	
<?php
}
?>
	</tbody>
</table>
<?php mysqli_close($db); ?>
</body>
</html>
