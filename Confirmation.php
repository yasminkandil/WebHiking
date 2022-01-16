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
			<h2 style="color:darkblue;text-align:center;">Suggestion confirm</h2>

 <table class="table table-hover table-bordered">
<thead>
	<tr>
			
			<th>Email</th>
			<th>Response</th>

		</tr>
	</thead>
<tbody>   
	<?php 
$servername="localhost";
		$username="root";
		$password="";
		$database="hikingpr";
		$conn=mysqli_connect($servername,$username,$password,$database);
		$que=mysqli_query($conn,"select * from adminresponse");
		while ($row=mysqli_fetch_array($que))
		 {
		 	
			?>
			 
			<td><?php echo $row['Email'];?></td>  
		    <td><?php echo $row['Message'];?></td>  
         </tr>
         <?php
       }
       ?>
</body>
</html>