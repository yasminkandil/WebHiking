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

/* Float cancel and delete buttons and add an equal width */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Close Button */
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
    mysqli_close($conn); // Close connection
    header("location:AdminGroups.php"); // redirects to all records page
    exit; 
}
else {
  echo "Error deleting record"; // display error message if not delete
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

// Get the button that opens the modal
var btton = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btton.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  </script>
</body>
</html>