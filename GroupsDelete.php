<html>
<head>
	<title>Edit my profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
body{
background-image: url('image.jpg');
opacity: 2;

}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}


.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: #474e5d;
  padding-top: 50px;
}


.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}


.cancelbtn {
  background-color: #ccc;
  color: black;
}


.deletebtn {
  background-color: #f44336;
}


.container {
  padding: 16px;
  text-align: center;
}


.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hikingpr";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}
?>
<form action='' method='Post' enctype='multipart/form-data' class="modal-content" onsubmit='return validate(this)'>
  <div class="modal-content">
    <span class="close">&times;</span>
     <h1>Delete Account</h1>
    <p>Are you sure you want to delete your account?
    </p>
    <br>
    <br>
    <br>
    <div class="clearfix">
    <button id="del" name="del" class="deletebtn" onclick="
    <?php
    if (isset($_POST["del"])){
      $id = $_GET['ID'];
      $del = mysqli_query($conn,"delete from groups where Group_ID = '$id'"); // delete query
      echo $del;
      if($del)
{
    mysqli_close($conn); 
    header("location:AdminGroups.php"); 
    exit; 
}
else {
  echo "Error deleting record"; 
}
}
?>">Delete</button>
    <button id="cl"class="cancelbtn" onclick="modal.style.display ='none'">Cancel</button>
  </div>

  </div>

</div>

</div>
</form>
  <script type="text/javascript">
    var modal = document.getElementById("myModal");


var btton = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];

btton.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  </script>
</body>
</html>
