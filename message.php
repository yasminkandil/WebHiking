 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<script>
 $(document).ready(function(){
   $("#messageForm").on("submit", function(e) {
       e.preventDefault()
       submitMessage()
   })
});
 		function submitMessage(event){
 			var $form=$("#messageForm")
 			var reciever='<?php echo $_GET['receiver'] ?>';
 		
 			var sent_by = $("input[name=sent_by]").val()
 			 var $form=$("#messageForm")
 			 var $message = $("input[name=message]")
 			
 				var data=$form.serialize()
  		
  		var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      	
		$message.val("")
    showMessage(reciever,sent_by)
      }
    };
    xmlhttp.open("POST","submitmessage.php?"+data,true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
 		}
function showMessage(reciever,sent_by) {
  
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("messagesTable").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getmessages.php?receiver="+reciever+"&sent_by="+sent_by,true);
    xmlhttp.send();
  
  
}

</script>
  <title></title>
 </head>
<body>
<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hikingpr";

$conn = new mysqli($servername, $username, $password, $dbname);

$receiver = $_GET['receiver'];
include "StyleHome.html";?>
<div class="navbar">
 
  <a href="Hikerhomepage.php">Home</a>
    <a href="Contactus.php">Contact us</a>
     
      <a href="ShopCart.php">Shop With Us</a>
    <a href="TripHistory.php">Trip History</a>
 
  </div>
  <?php

$getReceiver = "SELECT * FROM user WHERE ID = '$receiver'";
$getReceiverResult = mysqli_query($conn,$getReceiver) or die(mysqli_error($conn));
$getReceiverRow = mysqli_fetch_array($getReceiverResult);
?>
<img src="./img/<?=$getReceiverRow['Photo']?>" class="img-circle" width = "40"/>
<strong><?=$getReceiverRow['FirstName']?></strong>
<table  id="messagesTable" class="table table-striped">
<?php
$getMessage = "SELECT  messages.* ,user.FirstName FROM messages INNER JOIN user on sent_by=user.ID  WHERE sent_by = '$receiver' AND received_by = ".$_SESSION['ID']." OR sent_by = ".$_SESSION['ID']." AND received_by = '$receiver' ORDER BY createdAt asc";
$getMessageResult = mysqli_query($conn,$getMessage) or die(mysqli_error($conn));
if(mysqli_num_rows($getMessageResult) > 0) {
	while($getMessageRow = mysqli_fetch_array($getMessageResult)) {	?>
	<tr><div style = "margin: 10;">
	<td>	<h4 style = "color: #007bff;display:inline"><?=$getMessageRow['FirstName']?></h4></td>
	<td>	<p class="text-center" style = "display:inline"><?=$getMessageRow['message']?></p></td>
		</div>
		</tr>
<?php } 
} 
else { 
	echo "<tr><td><p>No messages yet! Say 'Hi'</p></td></tr>";
}
?>
</table>
  <form class="form-inline"  id="messageForm"  >
	<input type="hidden" name = "sent_by" value = "<?=$_SESSION['ID']?>"/>
	<input type="hidden" name = "received_by" value = "<?=$receiver?>"/>
	<input type="text" name = "message" class="form-control" placeholder = "Type your message here" required/>
	<input type = "submit" value='send'  class="btn btn-default" >

</form>

 </body>
 </html>
