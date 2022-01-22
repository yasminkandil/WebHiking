<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <style type="text/css">
    form {
      max-width: 500px;
      max-height: 470px;
      background-color: #fff;
      padding: 50px 50px;
    }
.topright {
  position: absolute;
  font-size: 16px;
  top: 1400px;
  left:570px;

}
div.elem-group {
  margin: 0px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: right;
  margin-left: 1%;
}

label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 7px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 70%;
  padding: 7px;
}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

textarea {
  height: 100px;
  width: 300px;
}

button {
  height: 50px;
  background: orange;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  border: 2px solid black;
}

</style>
</head>
<body>
  <?php
  $conn=new mysqli("localhost","root","","hikingpr");
  $result = mysqli_query($conn, "SELECT * FROM groups where Group_ID=".$_GET['Group_ID']);
      if ($row = mysqli_fetch_array($result)) {
  ?>
  <div class="container">
    <div class="topright">
<form action="" method="post">
  <div class="elem-group">
    <label for="Members">Number of pepole in this group</label>
    <input type="number" id="Members" name="totalnumb" value="<?php echo $row['Participants'];?>" readonly >
  </div>
  <br>
  <div class="elem-group inlined">
    <label for="checkin-date"><span class="glyphicon glyphicon-calendar"></span>Check-in Date</label>
    <input type="date" id="checkin-date" name="checkin" value="<?php echo $row['TripStart'];?>" readonly>
  </div>
  <div class="elem-group inlined">
    <label for="checkout-date"><span class="glyphicon glyphicon-calendar"></span>Check-out Date</label>
    <input type="date" id="checkout-date" name="checkout" value="<?php echo $row['TripEnd'];?>" readonly>
  </div>
  <div class="elem-group">
    <label for="message">Anything Else?</label>
    <textarea id="message" name="cmmt" placeholder="Tell us anything else that might be important."></textarea>
  </div>
  <center><button type="submit" name="checkk" >Join Group</button></center>
  <?php
if(isset($_POST['checkk'])){
  if($_POST['totalnumb']==10){
    ?>
   <div class="alert alert-warning alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sorry</strong> This Group is full right now you can wait for the new one
  </div>
  <?php
  }
  else{
   $sql2="INSERT into tripforhiker(Username,GroupSelected,Comments,user_id) values('".$_SESSION['username']."','".$_GET['Group_ID']."','".$_POST['cmmt']."','".$_SESSION['ID']."')";
    $result2=mysqli_query($conn,$sql2);
      if($result2)
      {       
        ?>
    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>You have successfully booked your trip go check trip history for all your booked trips!</strong> 
  </div>
  <?php
}
}
}
}

?>
</form>

 </div>
</div>

<script type="text/javascript">
//Date
var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}

</script>
</body>
</html>
