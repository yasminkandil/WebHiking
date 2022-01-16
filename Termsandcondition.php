<!DOCTYPE html>
<html>
<head>
<title>Terms and Condition</title>
   <link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
* {
  box-sizing: border-box;
}

.header {
  padding: 200px;
  text-align: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('2-1.jpg'); 
  opacity:1;
  color: black;
}

.row {  
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
}

.side {
  -ms-flex: 30%; 
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

.main {   
  -ms-flex: 70000%; 
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
/*el sewar el ta7t kol haga*/
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
.Calendar
{
 
  background-color: lightgrey;
  position: absolute;
  right:50px;
  font-size: 16px;
  top: 1150px;
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
<body>
  <?php 
  include_once "StyleHome.html"; ?>
  <div class="navbar">
      <a href="Hikerhomepage.php">Home</a>
    <a href="Contact_Us.php">Contact us</a>
     <div class="dropdown">
      <a href="Aboutus.php" class="dropbtn">About Us</a>
       <div class="dropdown-content">
      <a href="Termsandcondition.php">Terms and Conditions</a>
      <a href="AdvertisingDisclosure.php">Advertising Disclosure</a>
    </div>  
  </div>      <a href="ShopCart.php">Cart</a></div>

</div>
<div class="header">
  <h1 style="color:#00008B;font:bold;">The Hiking Life</h1>
  <br>
  <p><b>“Deserts, jungles, mountains or coast; I’ve never had a preference. If I’m out in nature with everything I need in the world on my back, chances are my smile is wide and my thoughts are clear.“</p></b>
</div>
<div class="row"> 
  <div class="side">
    <h3 style="color:#00008B;font:bold;">Photo of us:</h3>
    <br>
        <img src="istockphoto-955768228-612x612.jpg"style=width:100%></a>
        <br><br>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <br>

<h2 style="color:#00008B;font:bold;">Automatic Slideshow</h2>
<br>
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
    <h2 style="color:#00008B;font:bold;"><b>Terms & Conditions:</b></h2>
    <br>
<h5>The information contained in The Hiking Life website comes with no guarantees or warranties. Your use of this site constitutes your unconditional acceptance of the terms and conditions listed below.</h5>
<br>  
  <p>
<b>1.</b> The author, makes no guarantees as to the complete accuracy of the material contained in The Hiking Life. There may be errors, omissions and the information may not always be up-to-date. Under no circumstances may the author be held liable for any inaccuracies.
<br>
<b>2.</b> Whenever you venture into the great outdoors there are certain inherent risks involved. The onus is on each individual to accept these responsibilities for themselves. Under no circumstances, may readers of the website hold the author responsible for any injuries, loss or damages which may result from the adoption of any suggestions or recommendations contained in The Hiking Life.
<br>
<b>3.</b> Unless otherwise stated, all logos, graphics, photographs, videos and text are the property of Cam Honan, and may not be used without the express permission of the author.
<br>
<b>4.</b> The Hiking Life contains links to other websites. These links are provided as a convenience to the reader. The author accepts no responsibility for the accuracy or reliability of these third-party websites.
<br>
<b>5.</b> The Hiking Life comes with no warranties that this website, its server or any linked sites are free of computer viruses or other harmful code.
 </p>
 <br><br>
 <h2 style="color:#00008B;font:bold;">About us</h2>
 <br>
 <p>
 There’s nothing like a brisk climb to get your heart rate up! Our lives are busier and faster than ever with nine-to-five jobs and full social calendars enough to keep us at a constant level of stress. At On the Hike, we aim to connect hikers with other, and with nature. We provide a platform where they can meet, arrange hikes, get fully equipped with the necessary tools and finally get a much needed break.
 </p>
  </div>
</div> 
<div class="Calendar">
  <?php 
include"Calendar.html";
 ?></div>
  <div class="footer"> 

 <br><br><br><br><br><br><br><br><br><br><br><br><br>
<p>Copyright<a href="Hikerhomepage.php">The hiking life 2021</a>All Rights Reserved <a href="Privacy.php">Privacy and policy</a>
</p>
  </div>
</body>
</html>
