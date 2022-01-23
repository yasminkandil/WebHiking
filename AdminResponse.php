<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Response</title>

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
			<h2 style="color:darkblue;text-align:center;">Suggestion Form </h2>

 <table class="table table-hover table-bordered">
<thead>
	<tr>
			<th>ID</th>
			<th>Hiker Mail</th>

			<th>Group Name</th>
			<th>Group Location</th>
			<th>Description</th>
			<th>Activities Ideas</th>
			<th>Check in date</th>
			<th>Check out  date</th>
			<th>Respond</th>

		</tr>
	</thead>
<tbody>   
	<?php 
$servername="localhost";
		$username="root";
		$password="";
		$database="hikingpr";
		$conn=mysqli_connect($servername,$username,$password,$database);
		$que=mysqli_query($conn,"select * from groupssuggestions");
		while ($row=mysqli_fetch_array($que))
		 {
		 	
			?>
			<td> <?php echo $row["ID"];?></td>
			<td> <?php echo $row["Email"];?></td>
			<td> <?php echo $row['GroupName'];?></td>
			<td> <?php echo $row['GroupLocation'];?></td>
		    <td><?php echo $row['Describtion'];?></td> 
		    <td><?php echo $row['ActivitiesIdeas'];?></td>  
			<td><?php echo $row['CheckinDate'];?></td>  
		    <td><?php echo $row['CheckoutDate'];?></td>  
		    <td><a href="Respond.php?ID=<?php echo $row['ID']?>">Respond</a></td>

         </tr>
         <?php
       }
       ?>
</body>
</html>
