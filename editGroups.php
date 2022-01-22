<html>
<title>Edit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        #message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}
    form {
            background-color: #fff;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
#message p {
  padding: 10px 35px;
  font-size: 18px;
}
a{
    color:darkblue;
    font-size: 20px;
}
a.hover{
    color:black;
    font-size: 20px;
}

    </style>
</head>
<body>
	
<?php
function OurError($errno,$errstr){
  echo "ERROR $errstr";
  die();
}
set_error_handler("OurError",E_USER_WARNING);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hikingpr";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}
$ID = $_GET['ID'];
$qry = mysqli_query($conn,"select * from groups where Group_ID='$ID'"); // select query
$row = mysqli_fetch_array($qry);
if(isset($_POST['update'])) // when click on Update button
{
$ID = $_GET['ID'];
$GroupName = $_POST['GroupName'];
$GroupLocation = $_POST['GroupLocation'];
$Participants = $_POST['Participants'];
$Dlink=$_POST['DestinationLink'];
$desc=$_POST['Describtion'];
$Guided=$_POST['Guided'];
$PlaceName=$_POST['placeN'];
$TripStart=$_POST['checkin'];
$TripEnd=$_POST['checkout'];
$Price=$_POST['price'];
$included=$_POST['included'];
$notIncluded=$_POST['Notincluded'];
$otherTips=$_POST['otherT'];


	
    $edit = mysqli_query($conn,"update groups set Group_ID='$ID', GroupName='$GroupName' , GroupLocation='$GroupLocation' , Participants='$Participants' ,DestinationLink='$Dlink' ,  Describtion=' $desc', PlaceName='$PlaceName', TripStart=' $TripStart',  TripEnd=' $TripEnd',  Price=' $Price',  included=' $included',  notIncluded=' $notIncluded',  otherTips=' $otherTips' where Group_ID='$ID'");
	
    try{
if(!$edit)
throw new Exception("Error");
        
      }

      catch(Exception $e)
      {
        echo "Message:",$e->getMessage();
      }
    
        mysqli_close($conn); // Close connection
        header("location:AdminGroups.php"); // redirects to all records page
        exit;
      	
}
?>
<center> <h3>Update Data</h3></center>

<form method="POST">
  <h2 style="color:#00008B;font:bold; text-align: center;">Edit Group</h2>

<label style="color:#00008B;font:bold;" for="GroupName">Group Name:</label>
<input type="text" class="form-control" id="GroupName" name="GroupName" value="<?php echo $row['GroupName'];?>" required>

<label style="color:#00008B;font:bold;" for="GroupLocation">Group Location:</label>
<input type="text" class="form-control" id="GroupLocation" name="GroupLocation"value="<?php echo $row['GroupLocation'];?>" required>
<br>
<label style="color:#00008B;font:bold;" for="Participants">Participants:</label>
<input type="text" class="form-control" id="Participants" name="Participants"value="<?php echo $row['Participants'];?>" required>    <br>
<label style="color:#00008B;font:bold;" for="DestinationLink">Distination Link:</label>
<input type="text" class="form-control" id="DestinationLink" name="DestinationLink"value="<?php echo $row['DestinationLink'];?>" required>    <br>
<label style="color:#00008B;font:bold;" for="Describtion">Description:</label>
<input type="text" class="form-control" id="Describtion" name="Describtion"value="<?php echo $row['Describtion'];?>" required>    <br>
<div class="form-check">
  <input class="form-check-input" type="checkbox"  name="Guided" >
  <label style="color:#00008B;" class="form-check-label" >
    Guided?:
  </label>
</div>
<label style="color:#00008B;font:bold;" for="placeN">Place Name:</label>
<input type="text" class="form-control" id="placeN" name="placeN"value="<?php echo $row['PlaceName'];?>" required>    <br>
    <div class="elem-group inlined">
    <label  style="color:#ff8c00;font:bold;" for="checkin-date"><span class="glyphicon glyphicon-calendar"></span>Check-in Date</label>
  --  <input type="date" id="checkin-date" name="checkin" value="<?php echo $row['TripStart'];?>" class="form-control" required>
    <label  style="color:#ff8c00;font:bold;" for="checkout-date"><span class="glyphicon glyphicon-calendar"></span>Check-out Date</label>
   -- <input type="date" id="checkout-date" name="checkout" value="<?php echo $row['TripEnd'];?>" class="form-control" required>
  </div>
    <label style="color:#00008B;font:bold;" for="price">Price:</label>
<input type="text" class="form-control" id="price" name="price"value="<?php echo $row['Price'];?>" required>    <br>
     <label style="color:#00008B;font:bold;" for="included">trip includings :</label>
<input type="text" class="form-control" id="included" name="included"value="<?php echo $row['included'];?>" required>    <br>
    <label style="color:#00008B;font:bold;" for="Notincluded">trip not includings :</label>
<input type="text" class="form-control" id="Notincluded" name="Notincluded"value="<?php echo $row['notIncluded'];?>" required>    <br>
    <label style="color:#00008B;font:bold;" for="otherT">other tips :</label>
<input type="text" class="form-control" id="otherT" name="otherT"value="<?php echo $row['otherTips'];?>" required>    <br>

<label style="color:#00008B;font:bold" for="uploadPic">Upload main picture here:</label>
<input type="file" class="form-control" id="mimg" name="mimg"  accept="image/png, image/gif, image/jpeg">
<label style="color:#00008B;font:bold" for="uploadPic">Upload picture 2 here:</label>
<input type="file" class="form-control" id="img2" name="img2" accept="image/png, image/gif, image/jpeg">
<label style="color:#00008B;font:bold" for="uploadPic">Upload picture 3 here:</label>
<input type="file" class="form-control" id="img3" name="img3" accept="image/png, image/gif, image/jpeg">
<label style="color:#00008B;font:bold" for="uploadPic">Upload picture 4 here:</label>
<input type="file" class="form-control" id="img4" name="img4" accept="image/png, image/gif, image/jpeg">
<label style="color:#00008B;font:bold" for="uploadPic">Upload picture 5 here:</label>
<input type="file" class="form-control" id="img5" name="img5" accept="image/png, image/gif, image/jpeg">
    <br>
    <br>
    

        <br><button type="submit" value="update" class="btn btn-success" name="update" >update</button> 
        <button class="btn btn-danger" type="reset">Reset</button>
        <br><br>
        <center>
            <h2>
        <br>
        
    </h2>
    </center>
    </div>
</div>
</form>
</body>
</html>
