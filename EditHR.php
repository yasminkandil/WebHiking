<!DOCTYPE html>
<html>
<head>
	<title>Edit Penalty</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style type="text/css">
 body{
background-image: url('image.jpg');
opacity: 2;

}
form {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}
.form-control {
			text-align: left;
			margin-bottom: 25px;
		}
/*lonhaa yb2a blue */
input[type=submit] {
  background-color: #00008B;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  /* cursor yb2aa pointer lma y2oaf 3ndoo*/
  cursor: pointer;
  float: center;
}
/*3shan lma a2oaf 3llihaa yb2a lonha gray*/
input[type=submit]:hover {
  background-color: gray;
}


</style>
	<?php  
	  $servername="localhost";
		$username="root";
		$password="";
		$database="hikingpr";
		$conn=mysqli_connect($servername,$username,$password,$database);
if($conn->connect_error)
		{
	die("Fatal error can not connect");
		}
		$que=mysqli_query($conn,"select * from user where Type='admin' AND ID = ".$_GET["ID"]);
		$result=mysqli_fetch_array($que);

		if(isset($_POST['pen']))
		{
			$pen=filter_var($_POST['Penalty'],FILTER_SANITIZE_STRING);
			$edit=mysqli_query($conn,"update user set AddPenalty='$pen' where Type='admin' AND ID=".$_GET["ID"]);
			if($edit){
				mysqli_close($conn);
				header("location:HRpage.php");
				exit;
			}
			else {
				echo "error";
			}
		}
		?>
  <form method= "Post">
  <div class="row">

    <div class="form-group">
     <center><h3><label  style="color:#00008B;font:bold;" for="Penalty"> <i class='fas fa-exclamation-triangle' style='font-size:36px'> Penalty</i>
</label></h3></center>
    </div>
    <div >
   <input type="hidden" name="ID" value="<?php echo $result["ID"]?>">
   <br>
<input type="text" name="Penalty" value="<?php echo $result["AddPenalty"]?>" placeholder="Enter Penalty" class="form-control">
<br>
<center><input type="submit" name="pen" value="Add Penalty"></center>

    </div>
</div >
</form>
</body>
</html>