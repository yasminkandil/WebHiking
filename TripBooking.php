<!DOCTYPE html>
<html>
<title>Book A Trip</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.mySlides {
  display:none;
}

* {
  box-sizing: border-box;
}
hr {
  border: 1px dotted #ccc;
}

.right {
  position: absolute;
  width: 1000px;
  top: 50px;
  padding: 50px;
  right: 750px;
  font-size: 12px;
}
.column {
  float: left;
  width: 15%;
  padding: 7px;
  margin-left: 350px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 

}

.column img:hover {
  opacity: 1;
}
</style>
<body>
<?php 
session_start();
$servername="localhost";
    $username="root";
    $password="";
    $database="hikingpr";
    $conn=mysqli_connect($servername,$username,$password,$database);
    $result=mysqli_query($conn,"select * from groups where Group_ID=".$_GET['Group_ID']);
$row=mysqli_fetch_array($result);
include_once("StyleHome.html");
 ?>
 <div class="navbar">
  <a href="Hikerhomepage.php">Home</a>
    <a href="Contact_Us.php">Contact us</a> 
       <div class="text-align:left"> <a href="TripHistory.php">Trip History</a></div>

   
      <a href="ShopCart.php">Shop With Us</a>
  </div>
</div>
<div class="container">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="mountains/<?php echo $row['Photo1'];?> "style="width :100%;">
      </div>

      <div class="item">
         <img src="mountains/<?php echo $row['Photo2'];?> "style="width :100%;">
      </div>
    
      <div class="item">
        <img src="mountains/<?php echo $row['Photo3'];?> "style="width :100%;">
      </div>
      <div class="item">
        <img src="mountains/<?php echo $row['Photo4'];?> "style="width :100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <br><br><br><br> <br><br><br><br><br><br><br><br><br>
      <span class="glyphicon glyphicon-menu-left"></span> </a>
   
    <a  class="right carousel-control" href="#myCarousel" data-slide="next" >
      <br><br><br><br> <br><br><br><br><br><br><br>   
        <span class="glyphicon glyphicon-menu-right"></span>
    </a>
  </div>
  <h2 style="color:#00008B;font:bold">Overview:</h2>
  <p ><?php echo $row['Describtion']?></p>
   <hr>
<h2 style="color:#00008B;font:bold">Map Pin:
        <a href="<?php echo $row['DestinationLink']?>">
          <span class="glyphicon glyphicon-map-marker"></span>
        </a>
      </h2>
      <hr>

  <h2 style="color:#00008B;font:bold" onclick="myFunction('Demo1')"> <span class="glyphicon glyphicon-chevron-down"></span> What's Included:</h2>
<div id="Demo1" class="w3-hide w3-container">
  <h4> <span style="color:green;" class="glyphicon glyphicon-ok"><?php echo $row['included']; ?> </h4>
  <h4><span style="color:red;" class="glyphicon glyphicon-remove"> <?php echo $row['notIncluded']; ?></h4>
  <hr>
</div>
<h2 style="color:#00008B;font:bold" onclick="myFunction('Demo2')"> <span class="glyphicon glyphicon-chevron-down"></span> Additional Information:</h2>
<div id="Demo2" class="w3-hide">
  <h4> <span class="glyphicon glyphicon-asterisk"></span> <?php echo $row['otherTips']; ?></h4>
  <hr>
</div>
  <h2 style="color:#00008B;font:bold"> From:<?php echo $row['Price']; ?></h2>
  <h6>price varies according to number in group</h6>
  <hr>
  <h2 style="color:#00008B;font:bold">Average Rate for this group:
   <?php 
   $sqll="select * from surveyquestions";
   if($_GET['Group_ID']=='1'){
    $Rate='Ratebl';
   }
    if($_GET['Group_ID']=='2'){
    $Rate='Ratewd';
   }
    if($_GET['Group_ID']=='3'){
    $Rate='Ratesc';
   }
    if($_GET['Group_ID']=='4'){
    $Rate='Ratem';
   }
    if($_GET['Group_ID']=='5'){
    $Rate='surveysd';
   }
    if($_GET['Group_ID']=='6'){
    $Rate='Raters';
   }

  $sql_qry = "SELECT AVG($Rate) AS count FROM  surveyquestions where $Rate != 0";
  $duration = $conn->query($sql_qry);
  $record = $duration->fetch_array();
  $total = $record['count'];
echo "$total/5";
   ?>
    </h2>
  

<hr>
  
</div>
<script type="text/javascript">
  function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
<?php 
include_once("Check.php");
?>
</body>
</html>

