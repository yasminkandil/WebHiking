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
		<th>Product Name</th>
		<th>Product image</th>
		<th>Product Describtion</th>
		<th>Product Price</th>
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
$records = mysqli_query($conn,"select * from tbl_product"); // fetch data from database

while($row = mysqli_fetch_array($records))
{
?>
<tbody>
<tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['name']?></td>
<td><img src="<?php echo $row['image']; ?>" width="100" height="100"></td>
<td><?php echo $row['descr']?></td>
<td><?php echo $row['price']?></td>

<td><a href="editProduct.php?ID=<?php echo $row['id']?>">Edit</a></td>
<td><a href="DeleteProduct.php?ID=<?php echo $row["id"]?>">Delete</a></td>
</tr>
</tbody>

<?php	
}
?>
</table>

<center><button type="button" class="btn btn-info"  onclick="window.location.href='AddProducts.php'">Add Another Product</button></center>

</div>

</body>
</html>