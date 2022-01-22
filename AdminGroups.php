<html>
<head>
	<title>Hiking Groups</title>
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
	
	<div class ="container, table">
	<h2 style="color:#00008B;text-align:center">Hiking Groups</h2>
	<table class = "table table-hover table-bordered">
		<thead>
			<tr>
		<th>ID</th>
		<th>Group Name</th>
		<th>Group Location</th>
		<th>Participants</th>
		<th>Location Link</th>
		<th>Main Picture for group</th>
		<th>1st Picture</th>
		<th>2nd Picture</th>
		<th>3rd Picture</th>
		<th>4th Picture</th>
		<th>Describtion</th>
		<th>Trip Start</th>
		<th>Trip End</th>
		<th>Price</th>
		<th>Guided</th>
		<th>What's included</th>
		<th>what's not included</th>
		<th>Other Tips</th>
		<th>Edit</th>
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
$records = mysqli_query($conn,"select * from groups"); // fetch data from database

while($row = mysqli_fetch_array($records))
{
?>
<tbody>
<tr>
<td><?php echo $row['Group_ID']?></td>
<td><?php echo $row['GroupName']?></td>
<td><?php echo $row['GroupLocation']?></td>
<td><?php echo $row['Participants']?></td>
<td><?php echo $row['DestinationLink']?></td>
<td><?php echo $row['mainphoto']?></td>
<td><?php echo $row['Photo1']?></td>
<td><?php echo $row['Photo2']?></td>
<td><?php echo $row['Photo3']?></td>
<td><?php echo $row['Photo4']?></td>
<td><?php echo $row['Describtion']?></td>
<td><?php echo $row['TripStart']?></td>
<td><?php echo $row['TripEnd']?></td>
<td><?php echo $row['Price']?></td>
<td><?php echo $row['Guided']?></td>
<td><?php echo $row['included']?></td>
<td><?php echo $row['notIncluded']?></td>
<td><?php echo $row['otherTips']?></td>
<td><a href="editGroups.php?ID=<?php echo $row['Group_ID']?>">Edit</a></td>
<td><a href="GroupsDelete.php?ID=<?php echo $row["Group_ID"]?>">Delete</a></td>
</tr>
</tbody>

<?php	
}
?>
</table>

<center><button type="button" class="btn btn-info"  onclick="window.location.href='Addgroups.php'">Add Another Group</button></center>

</div>

</body>
</html>
