<!DOCTYPE html>
<html>
<head>
	<title>Trip History</title>
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
<?php
session_start();?>
 <div class="container,table">
	<h2 style="color:#00008B;text-align:center;">Your Booked Trips</h2>
	<table class="table table-striped table-bordered">
		<thead><tr>
			<th>Group Number</th>
			<th>Group Name</th>
			<th>Group Location</th>
			<th>Participants</th>
			<th>Rate</th>
			<th>Destination Map Link</th>
			<th>Describtion</th>
			<th>TripStart</th>
			<th>TripEnd</th>
			<th>Price</th>
			<th>Guided</th>
		
		</tr>
	</thead>
	<tbody>
		<?php
$db = new mysqli("localhost","root","","hikingpr");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
$records = mysqli_query($db,"select * from groups join tripforhiker on (Group_ID=GroupSelected) "); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Group_ID']; ?></td>
    <td><?php echo $data['GroupName']; ?></td>
    <td><?php echo $data['GroupLocation']; ?></td>
    <td><?php echo $data['Participants']; ?></td>
    <td><?php echo $data['Rate']; ?></td>
    <td><?php echo $data['DestinationLink']; ?></td>
    <td><?php echo $data['Describtion']; ?></td>
    <td><?php echo $data['TripStart']; ?></td>
    <td><?php echo $data['TripEnd']; ?></td>
    <td><?php echo $data['Price']; ?></td>
    <td><?php echo $data['Guided']; ?></td>
  </tr>	
<?php
}
?>
	</tbody>
</table>
<?php mysqli_close($db); ?>
</body>
</html>
