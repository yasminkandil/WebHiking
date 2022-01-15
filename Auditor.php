<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <title>   </title>
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
	 <table class="table table-hover table-bordered">
	<thead>
	  <tr>
			<th>Email</th>
			<th>Type</th>
			<th>First Question </th>
			<th>Second Question </th>
			<th>Third Question </th>
			<th>Fourth Question </th>
			<th>Fifth Question </th>
			<th>Comments</th>
			<th>Rate for Saint Catherine trip</th>
			<th>Rate for Mousa trip</th>
			<th>Rate for Blue Lagoon trip</th>
			<th>Rate for Sinai Desert Trip</th>
			<th>Rate for  Wadi Degla trip</th>
			<th>Rate for Red Sea trip</th>
	  </tr>
	</thead>
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
		$sql= "select * from surveyquestions";
		$result=mysqli_query($conn,$sql);
	     while ($row=mysqli_fetch_array($result))
		 {
            
			?>
	      <tbody>
	        <tr>	
			<td> <?php echo $row["Email"];?></td>
			<td> <?php echo $row['type'];?></td>
			<td> <?php echo $row["First"];?></td>
		       <td> <?php echo $row["Second"];?></td>
			<td> <?php echo $row["Third"];?></td>
			<td> <?php echo $row["Fourth"];?></td>
			<td> <?php echo $row["Fifth"];?></td>
			<td> <?php echo $row["Comments"];?></td>
			<td> <?php echo $row["Ratesc"]; ?></td>
			<td> <?php echo $row["Ratem"]; ?></td>
			<td> <?php echo $row["Ratebl"]; ?></td>
			<td> <?php echo $row["Ratesd"]; ?></td>
			<td> <?php echo $row["Ratewd"]; ?></td>
			<td> <?php echo $row["Raters"]; ?></td>
		</tr>
	     </tbody>
	<?php  
		}
		?>
      
</table>
</body>
</html>