<!DOCTYPE html>
<html>
<head>
<title>Advertising Disclosure</title>
   <link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
* {
  box-sizing: border-box;
}

/* Header/logo Title */

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}
/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */

.side a {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color:sandybrown;
  padding: 20px;
}
/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */

.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color:lightgrey;
  padding: 20px;
}
/* Main column */
.main {   
  -ms-flex: 70000%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
/*el sewar el ta7t kol haga*/
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: lightgrey;
}
* {box-sizing: border-box;}
body {-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Number text (1/3 etc) */
.numbertext {
  color: black;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots/bullets/indicators * el ta7t el slide show*/
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
/* Fading animation //animation bta3 slide show */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
/* fade kdaa ll animation 3shan swraa matghyrshh 3al toll*/
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<?php include_once 'StyleHome.html'; ?>
<body>
  <div class="navbar">
 <a href="Hikerhomepage.php">Home</a>
   
   <a href="Contact_Us.php">Contact us</a> 
        
     <div class="dropdown">
  
      <a href="Aboutus.php" class="dropbtn">About Us</a>
       <div class="dropdown-content">
      <a href="Termsandcondition.php">Terms and Conditions</a>
      <a href="AdvertisingDisclosure.php">Advertising Disclosure</a>
    </div>
  </div>
</div>
<div class="header">
  <h1 style="color:#00008B;font:bold">The Hiking Life</h1>
  <br>
  <p><b>“Deserts, jungles, mountains or coast; I’ve never had a preference. If I’m out in nature with everything I need in the world on my back, chances are my smile is wide and my thoughts are clear.“</p></b>
</div>
<div class="row"> 
  <div class="side">
      <h2 style="color:#00008B;font:bold">In a Nutshell</h2>
     
    <p>The Hiking Life is a compilation of tips and advice on trip planning, lightweight backpacking techniques, and improving your wilderness skill set. It contains detailed information for more than 200 of the world’s great hikes and was put together with the mission of inspiring and enabling folks to go backpacking.</p>
<br>
<p style="color:#ff8c00;">~ Cam “Swami” Honan – “The most traveled hiker on earth” (Backpacker Magazine, January 2015)</p>
</head>
<body>
	<br>
<h2 style="color:#00008B;font:bold">Automatic Slideshow</h2>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="inline_image_preview.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="istockphoto-1166417561-612x612.jpg" style="width:100%">
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
//function ll animation bta3 slide show
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
  </div>
  <div class="main">
    <h2 style="color:#00008B;font:bold"><b>Advertising Disclosure:</b></h2>
    <br>
<h5 style="color:#ff8c00;">

The Hiking Life is a participant in the Avantlink and Amazon affiliate marketing programs.
</h5>
  <p>
This is a form of advertising by which the website receives a small commission if the reader clicks on a hyperlink, goes to the online store in question (e.g. REI, Backcountry, Sierra Trading Post, etc.) and subsequently makes a purchase.</p>
<br>  
<p>
These fees are paid by the online retailers, not by readers, and in no way affect the purchase price of the said product/s.
</p><br>
<p>
The proceeds from these commissions help to support The Hiking Life website (i.e. maintenance costs and development of new content).</p>

 <br><br>
 <h2 style="color:#00008B;font:bold">About us</h2>
 <br>
 <p>
 There’s nothing like a brisk climb to get your heart rate up! Our lives are busier and faster than ever with nine-to-five jobs and full social calendars enough to keep us at a constant level of stress. At On the Hike, we aim to connect hikers with other, and with nature. We provide a platform where they can meet, arrange hikes, get fully equipped with the necessary tools and finally get a much needed break.
 </p>
  </div>
</div>  
<div class="footer"> 
  <?php 
include"Calendar.html";
 ?>
 <br><br><br><br><br><br><br><br><br><br><br><br><br>
<p>Copyright<a href="Hikerhomepage.php">The hiking life 2021</a>All Rights Reserved <a href="Privacy.php">Privacy and policy</a>
</p>
  </div>
</body>
</html>
