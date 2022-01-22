<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

form {
      background-color: #fff;
      max-width: 500px;
      margin: 50px auto;
      padding: 30px 20px;
      box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    }
    body{
background-image: url('image.jpg');
 height: 200%; 
  background-repeat: no-repeat;
  background-size: cover;

}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}



input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

</style>
</head>
<body>
<?php
 session_start();
$loc="localhost";
$admin="root";
$pass="";
$DB="hikingpr";
$errormessage="";
$conn=mysqli_connect("localhost","root","",$DB);
include_once "StyleHome.html";
?>
<div class="navbar">
      <a href="Hikerhomepage.php">Home</a>
    <a href="Contact_Us.php">Contact us</a>
    <a href="rogrogshop.php">Cart <span class="glyphicon glyphicon-shopping-cart"></span></a>
  </div>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="POST">
        <h2 style="color:#ff8c00;font:bold; text-align: center;">Checkout Form</h2>

      
        <div class="row">
          <div class="col-50">
            
            <h3 style="color:#00008B;font:bold;">Billing Address</h3>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Cairo" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Egypt">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3 style="color:#00008B;font:bold;">Payment</h3>
            
            <label for="fname">Accepted Cards </label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname" >Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum" >Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <div class="custom-select" style="width:200px;">
            <select>
            <option value="0">Type of payment:</option>
            <option value="1">Cash on deliviry</option>
            <option value="2">credit card</option>
            </select>
            </div>
        <input type="submit" name="submit" value="Confirm Order" class="btn">
      </form>
      <?php

if(isset($_POST['submit'])){


$Cname=filter_var($_POST['cardname'],FILTER_SANITIZE_STRING);

$city=filter_var($_POST['city'],FILTER_SANITIZE_STRING);
$State=filter_var($_POST['state'],FILTER_SANITIZE_STRING);
$Address=filter_var($_POST['address'],FILTER_SANITIZE_STRING);
$Zip=filter_var($_POST['zip'],FILTER_SANITIZE_STRING);
$cardnum=filter_var($_POST['cardnumber'],FILTER_SANITIZE_STRING);
$Expmonth=filter_var($_POST['expmonth'],FILTER_SANITIZE_STRING);
$Expyear=filter_var($_POST['expyear'],FILTER_SANITIZE_STRING);
$CVV=filter_var($_POST['cvv'],FILTER_SANITIZE_STRING);
$date = date('Y-m-d H:i:s');
$sql="update orders set Address='".$Address."',City= '".$city."',State='".$State."',DateOfOrder='".$date."',Zip='".$Zip."',CardName='".$Cname."',CreditCardNum='".$cardnum."',ExpMonth='".$Expmonth."',ExpYear='".$Expyear."',CVV='".$CVV."',UserMail='".$_SESSION['username']."' where user_id='".$_SESSION['ID']."'";
      $result=mysqli_query($conn,$sql);
  header("Location:Hikerhomepage.php");

      if($result)
      {     	
      	?>
            	<div class="alert alert-success">
		<strong>You're order has been submitted !</strong>

	</div>



            		<?php
      }
}
      ?>


    </div>
  </div>
  
  </div>
</div>

</body>
</html>
