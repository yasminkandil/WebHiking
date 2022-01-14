<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HR page</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	
  	table th{
		color:black;
		background-color:#89CFF0;
	}
  </style>

</head>
<body>
	<div class="conatiner,table">
			<h2 style="color:darkblue;text-align:center;">Admins Profiles</h2>

	<table class="table table-hover table-bordered">
<thead>
	<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Penalty</th>
			<th>Add Penalty</th>
		</tr>
	</thead>
<tbody>    
 <?php 
       $servername="localhost";
		$username="root";
		$password="";
		$database="hikingpr";
		$conn=mysqli_connect($servername,$username,$password,$database);
		if(!$conn)
		{	

			die("Connection failed".mysqli_connect_error());
		}
		$que="SELECT * FROM user WHERE Type='admin'";
		$result=mysqli_query($conn,$que);

		while ($row=mysqli_fetch_array($result))
		 {
		 	if (!empty($row['AddPenalty'])) {
		 	
			?>

			<tr class="danger">	
			<td> <?php echo $row["ID"];?></td>
			<td> <?php echo $row['FirstName'];?></td>
			<td> <?php echo $row['LastName'];?></td>
		<td>  <?php echo $row['AddPenalty'];?></td>           
			<td><a href="EditHR.php?ID=<?php echo $row['ID']?>">Add penalty</a></td>
         </tr>
         <?php
       }
       else
       {
       	?>
       	<tr>	
			<td> <?php echo $row["ID"];?></td>
			<td> <?php echo $row['FirstName'];?></td>
			<td> <?php echo $row['LastName'];?></td>
		<td>  <?php echo $row['AddPenalty'];?></td>           
			<td><a href="EditHR.php?ID=<?php echo $row['ID']?>">Add penalty</a></td>
         </tr>
         <?php  
       }
     }
       ?>
	</table>

		<?php  
         mysqli_close($conn);
           ?>	</div>
</tbody>
</table>
</body>
</html>
