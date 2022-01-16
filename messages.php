  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hikingpr";

$conn = new mysqli($servername, $username, $password, $dbname);

include "StyleHome.html";
?>
<div class="navbar">
 
  <a href="Hikerhomepage.php">Home</a>
    <a href="Contactus.php">Contact us</a>
     
      <a href="ShopCart.php">Shop With Us</a>
    <a href="TripHistory.php">Trip History</a>
  
  </div>


<center><h3>Type name to start conversation</h3></center>
<div class="container">
  <form class="form-inline" method = "POST" action = "">
<label style="color:#00008B;" for="txt1">First Name:</label>
<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" name="txt1" class="  search-query form-control w-50" placeholder="Search" id="txt1" onkeyup="showHint(this.value)" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="submit" name="search">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
<br>
<label style="color:#00008B;" for="txtHint">suggestions:</label>
<p><span id="txtHint"></span></p>
</div>
<script>
	function showHint(str){
		if(str.length==0){
			document.getElementById("txtHint").innerHTML="";
			return;
		}
		const xhttp= new XMLHttpRequest();
		xhttp.onload=function(){
			document.getElementById("txtHint").innerHTML=this.responseText;
		}
		xhttp.open("GET","gethint.php?q="+str);
		xhttp.send();
	}



</script>

<?php
$conn=new mysqli("localhost","root","","hikingpr");
if(isset($_POST['search'])) {
  $search=$_POST['txt1'];
  $searchUser = "SELECT * FROM user WHERE FirstName = '$search'";
  $searchUserResult = mysqli_query($conn,$searchUser);

  while($searchUserRow = mysqli_fetch_array($searchUserResult)){  ?>
    <div>
    <img src = "img/<?=$searchUserRow['Photo']?>" class="img-circle" width = "40"/>
    <?=$searchUserRow['FirstName']?>
    <a href="./message.php?receiver=<?=$searchUserRow['ID']?>">Send message</a>
    </div>
<?php }
}
?>


<?php
$lastMessage = "SELECT DISTINCT sent_by FROM messages WHERE received_by = ".$_SESSION['ID'];
$lastMessageResult = mysqli_query($conn,$lastMessage) or die(mysqli_error($conn));
if(mysqli_num_rows($lastMessageResult) > 0) {
	while($lastMessageRow = mysqli_fetch_array($lastMessageResult)) {
		$sent_by = $lastMessageRow['sent_by'];
		$getSender = "SELECT * FROM user WHERE ID = '$sent_by'";
		$getSenderResult = mysqli_query($conn,$getSender) or die(mysqli_error($conn));
		$getSenderRow = mysqli_fetch_array($getSenderResult);
		?>
		<div>
		<img src = "./img/<?=$getSenderRow['Photo']?>" class="img-circle" width = "40"/> 
		<?=$getSenderRow['FirstName'];?>
		<a href="./message.php?receiver=<?=$sent_by?>">Send message</a>
		</div><br>
<?php }
} 
else {
	echo "No conversations yet!";
}
?>
</div>

