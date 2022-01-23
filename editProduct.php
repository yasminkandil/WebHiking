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
$qry = mysqli_query($conn,"select * from tbl_product where id='$ID'"); // select query
$row = mysqli_fetch_array($qry);
if(isset($_POST['update'])) // when click on Update button
{
$ID = $_GET['ID'];
$ProductN = $_POST['ProductN'];
$ProductD = $_POST['ProductD'];
$Price = $_POST['price'];
$dir='img/';
  $fileName=$_FILES['mimg']['name'];
  move_uploaded_file($_FILES['mimg']['tmp_name'], $dir.$fileName);	
    $edit = mysqli_query($conn,"update tbl_product set  name='$ProductN' , descr='$ProductD' , price='$Price' ,image='".$_FILES['mimg']['name']. "' where id='$ID'");
    //echo $edit;
    try{
if(!$edit)
throw new Exception("Error");
        
      }

      catch(Exception $e)
      {
        echo "Message:",$e->getMessage();
      }
    
        mysqli_close($conn); // Close connection
        header("location:AllProducts.php"); // redirects to all records page
        exit;
      	
}
?>
<center> <h3>Update Data</h3></center>

<form method="POST" enctype='multipart/form-data'>
  <h2 style="color:#00008B;font:bold; text-align: center;">Edit Group</h2>

<label style="color:#00008B;font:bold;" for="ProductN">Product Name:</label>
<input type="text" class="form-control" id="ProductN" name="ProductN" value="<?php echo $row['name'];?>" required>

<label style="color:#00008B;font:bold;" for="ProductD">Product Describtion:</label>
<input type="text" class="form-control" id="ProductD" name="ProductD"value="<?php echo $row['descr'];?>" required>
<br>
<label style="color:#00008B;font:bold;" for="price">Product Price:</label>
<input type="text" class="form-control" id="price" name="price"value="<?php echo $row['price'];?>" required>    <br>

<label style="color:#00008B;font:bold" for="uploadPic">Upload main picture here:</label>
<input type="file" class="form-control" id="mimg" name="mimg"  accept="image/png, image/gif, image/jpeg">

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