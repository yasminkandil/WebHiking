<!DOCTYPE html>
<html lang="en">
<head>
  <title>Choose Trip</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  	 h1{
  	 	color:#00008B;
  	 	font:bold;
  	 	font-size: 40px;
}
p{

  color:#00008B;
  font:bold;
  font-size:20px;
}
 </style>
</head>
<body>
<?php 
session_start();
 $servername="localhost";
    $username="root";
    $password="";
    $database="hikingpr";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn)
    {
      die("Connection failed".mysqli_connect_error());
    }
    $que="SELECT * FROM groups";
    $result=mysqli_query($conn,$que);
    //$row=mysqli_fetch_array($result);
              // $id=$row["ID"];
include_once "StyleHome.html";
?>


<div class="navbar">
      <a href="Hikerhomepage.php">Home</a>
    <a href="Contact_Us.php">Contact us</a>
    <a href="rogrogshop.php">Cart <span class="glyphicon glyphicon-shopping-cart"></span></a>
  </div>

<div class="container">
  <center><h1>Choose your trip</h1></center>

  <div class="row">
    <?php 
while($row = mysqli_fetch_array($result))
{
  ?>
     <div class="col-md-6">
      <div class="thumbnail">
        <a href="mountains/<?php echo $row['mainphoto'];?>" target="_blank">
            <img src="mountains/<?php echo $row['mainphoto'];?>" style="width:100%"class="img-rounded">
</a>
       
          <div class="caption">
            <p> <a href="TripBooking.php?Group_ID=<?php echo $row['Group_ID'] ?>"><?php echo $row['PlaceName']; ?></a></p> 

          </div>
        
      </div>
    </div>
    <?php
}
     ?>
 </div>
 </div>   
</body>
</html>


