<!DOCTYPE html>
<html>
<head>
<title>Hiker Home Page</title>
   <link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<style>
* {
  box-sizing: border-box;
}
body {
font-family: Arial, Helvetica, sans-serif;
  margin: 0;

  }
.navbar {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: darkblue;
}

.navbar a {
   display: inline-block;
   float: left;
   font-size: 16px;
  color: white;
    margin: 0;

  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: orange;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: gray;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.header {
  padding: 90px;
  text-align: center;
  height: 100%; 
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('256030002_1772468972962209_7130267671656668582_n.jpg'); 
  opacity:1;
  color: black;
}
.row {  
  display: flex;
}

.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}
.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}
/* Fake image*/
/*el sewar el ta7t kol haga*/
.img {
  
  width: 100%;
  padding: 20px;
}
/* Footer */
.footer {
  padding:15px;
  text-align: center;
  background: #f1f1f1;
}
* {box-sizing: border-box;}
body {-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow  */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.numbertext {
  color: black;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots * el ta7t el slide show*/
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/*  animation bta3 slide show */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.Calendar
{
  background-color: lightgrey;
  position: absolute;
  left:75px;
  font-size: 16px;
  top: 1120px;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

</style>
         <div class="navbar">

      <?php 
      session_start();
      $conn = new mysqli("localhost", "root", "", "hikingpr");
      if(empty($_SESSION['ID']))
    {
     ?>     <div class="navbar">

  <a href="Hikerhomepage.php">Home</a>
    <a href="Contact_Us.php">Contact us</a>
     <a href="log.php">Login</a>
     <a href="Signup.php">Sign up</a>
     <li class="dropdown">
      <button class="dropbtn">About Us<i class="fa fa-caret-down"></i> </button>
       <div class="dropdown-content">
      <a href="Termsandcondition.php">Terms and Conditions</a>
      <a href="AdvertisingDisclosure.php">Advertising Disclosure</a>
    </div>  
     
      </div> 
<?php 
} 
else
{?>
  <div class="navbar"> <?php  
  if($_SESSION['type']=='hiker'){
$result = mysqli_query($conn, "SELECT Photo FROM user where Type='hiker' and ID=".$_SESSION['ID']);
      if ($row = mysqli_fetch_array($result)) {

        ?> 
        <a><?php echo "<img src='img/".$row['Photo']."' width=25 style='border-radius: 50%;'>";?></a>  
        <?php
        $id=$_SESSION["ID"];
      }
      ?> 
      <a>Welcome <?php echo $_SESSION['fname'];?></a>
      <a href="Hikerhomepage.php">Home</a>
      <a href="Contact_Us.php">Contact us</a>
      <a href="users.php">Chat</a>
      <a href="rogrogshop.php">Shop With Us</a>
      <a href="ChooseTrip.php">Choose Trip</a>
      <a href="TripHistory.php">Trip History</a>
      <a href="Confirmation.php">Suggestion Response</a>
      <div class="dropdown">
      <button class="dropbtn">About Us  <i class="fa fa-caret-down"></i> </button>
    <div class="dropdown-content">
      <a href="Termsandcondition.php">Terms and Conditions</a>
      <a href="AdvertisingDisclosure.php">Advertising Disclosure</a>
    </div> 
    </div> 
       <a href="HikerEdit.php"> Edit account</a>
       <a href="Survey.php">Survey</a>
       <a href="signout.php">Sign Out</a>

  </div>
  </div>
</div>
      <?php
       } ?>
 
<div class="navbar">
  <?php
  if($_SESSION['type']=='admin'){
      $result = mysqli_query($conn, "SELECT Photo FROM user where Type='admin' and ID=".$_SESSION['ID'] );
      if ($row = mysqli_fetch_array($result)) {
        ?> <a><?php echo "<img src='img/".$row['Photo']."' width=25 style='border-radius: 50%;'>";?></a><?php
      }
      ?><a>Welcome <?php echo $_SESSION['fname'];?></a>
      <a href="Hikerhomepage.php">Home</a></li>
      <a href="Administrator.php">Add/Delete Admins</a>
      <a href="users.php">Chat</a> 
      <a href="AdminGroups.php">Add/Edit/Delete groups</a>
      <a href="AllProducts.php">Add/Edit/Delete Products</a>
      
      <a href="HikersProfiles.php">Hikers Profiles</a>
      <a href="AdminResponse.php">Suggestions of hikers</a>
      <a href="OrdersSearch.php">Search Orders</a>
      <a href="signout.php">Sign Out</a>
       </div>

      <?php
 } ?>
 <div class="navbar">
<?php
  if($_SESSION['type']=='HR'){
      $result = mysqli_query($conn, "SELECT Photo FROM user where Type='HR' and ID=".$_SESSION['ID'] );
      if ($row = mysqli_fetch_array($result)) {
        ?> <a><?php echo "<img src='img/".$row['Photo']."' width=25 style='border-radius: 50%;'>";?></a><?php
      }
      ?><a>Welcome <?php echo $_SESSION['fname'];?></a>
      <a href="Hikerhomepage.php">Home</a>
      <a href="HRpage.php">Add penalty to admins</a>
      <a href="messages.php">Chat</a>    
    <a href="investigations.php">Investigations requests sent by auditor</a>
       <a href="signout.php">Sign Out</a>  

      <?php
 } ?>
  </div>
  <div class="navbar">
  <?php
  if($_SESSION['type']=='auditor'){
      $result = mysqli_query($conn, "SELECT Photo FROM user where Type='auditor' and ID=".$_SESSION['ID'] );
      if ($row = mysqli_fetch_array($result)) {
        ?> <a><?php echo "<img src='img/".$row['Photo']."' width=25 style='border-radius: 50%;'>";?></a><?php
      }?>
     <a>Welcome <?php echo $_SESSION['fname'];?></a>
      <a href="Hikerhomepage.php">Home</a>
      <a href="inv.php">Add penalty to admins</a>
      <a href="auditorChatHistory.php">Chats</a>
      <a href="Auditor.php">Survey answers</a>
     <a href="signout.php">Sign Out</a>  
  
      <?php
 } ?></div>
 
  <?php
}
?>
</div>
<div class="header">
  <h1>On The Hike</h1>
  <p><b>It's not the mountain we conquer , but ourselves.</p></b>
</div>
<div class="row"> 
  <div class="side">
    <h2 style="color:#00008B;font:bold">Photo of us:</h3>
    <br>
        <img src="istockphoto-955768228-612x612.jpg"style=width:100%></a>
        <br>
        <br>
    <p>"Teamwork is the ability to work together toward a common vision. The ability to direct individual accomplishments toward organizational objectives. It is the fuel that allows common people to attain uncommon results." (Andrew Carnegie)</p>
    <br>
</head>
<body>
<h2 style="color:#00008B;font:bold">Automatic Slideshow</h2>
<br>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="SlideShow1.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="SlideShow22.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="SlideShow3.jpg" style="width:100%">
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; //3shan swar ttla3 wara ba3d msh ta7t ba3d 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    //3shan yrga3 ybd2 mn el awl ba3d m slideshow ykhlass
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  //3shan y show el images
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
  </div>
  <div class="main">
    <h2 style="color:#00008B;font:bold">In A Nutshell</h2>
    
    <div class="img" style="height:200px;"><img src="3ffb8-seton-lake-mountains-1x3-1.jpg"></div>
    <br><br><br><br><br><br><br><br><br><br><br>
    <p>The Hiking Life is a compilation of tips and advice on trip planning, lightweight backpacking techniques, and improving your wilderness skill set. It contains detailed information for more than 200 of the world’s great hikes and was put together with the mission of inspiring and enabling folks to go backpacking.
</p>
    <p style="color:#ff8c00;font:bold">~ Cam “Swami” Honan – “The most traveled hiker on earth” (Backpacker Magazine, January 2015)</p>
    <br>
    <h2 style="color:#00008B;font:bold">Hikers People Hiking</h2>
    <h5 style="color:#ff8c00;">  Healthy Active Lifestyle</h5>
    <div class="img" style="height:200px;"><img src="LastPhoto.jpg"></div>
    <p>When arriving at each of the destinations on the Camino, the customer will be greeted with a warm welcome and pleasant accommodations, which generally include top-of-the-line small family hotels, charming rural houses and pazos (the name for Galician country homes), where you will be able to enjoy a unique atmosphere, reminiscent of that felt throughout the entire Camino de Santiago, while also enjoying the cultural richness and exquisite food that is such an integral part of the Camino de Santiago.</p>
    <p><h4 style="color:#00008B;font:bold">Why book with Santiago Ways?</h4>
       <ul>
<li>Reserve without intermediaries, we are Official Touroperator of the Camino de Santiago. </li>
<li>We guarantee the best price.</li>
<li>Customer satisfaction, our highest priority.</li>
<li>The Travel Agency with the best rating on the Camino de Santiago according to Google Review.</li>
<li>Greater offer of Caminos de Santiago.</li></ul>
<h4 style="color:#00008B;font:bold">What do all our trips include?</h4>
<ul>
<li>Accommodation in hotels, rural houses and hostels. All rooms have private bathrooms.</li>
<li>Meals plan. (Breakfast, Breakfast and dinner, Breakfast, dinner and picnic)</li>
<li>Luggage transfer.</li>
<li>Travel assistance insurance.</li>
<li>Emergency telephone number 24/7.</li>
<li>Travel assistance vehicle in case of emergency.</li></ul>
<h4 style="color:#00008B;font:bold">What additional services does Santiago Ways offer?<h4>
  <ul>
<li>Superior accommodation.</li>
<li>Transfers.</li>
<li>Additional nights.</li>
<li>Guided visits.</li>
<li>Massages.</li></ul></p>
  </div>
</div>  
 <div class="Calendar">
  <?php 
include"Calendar.html";
 ?>
</div>
 <div class="footer">
<p>Copyright<a href="Hikerhomepage.php">The hiking life 2021</a>All Rights Reserved <a href="Privacy.php">Privacy and policy</a>
</p>
  </div>
</body>
</html>
