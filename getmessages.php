<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hikingpr";

$receiver=$_GET['receiver'];
$sent_by=$_GET['sent_by'];
$conn = new mysqli($servername, $username, $password, $dbname);

$messagesTable="";
$messagesTable.='<table class="table table-striped">';


$getMessage = "SELECT  messages.* ,user.FirstName FROM messages INNER JOIN user on sent_by=user.ID  WHERE sent_by = '$receiver' AND received_by = '$sent_by' OR sent_by = '$sent_by' AND received_by = '$receiver' ORDER BY createdAt asc";

$getMessageResult = mysqli_query($conn,$getMessage) or die(mysqli_error($conn));
if(mysqli_num_rows($getMessageResult) > 0) {
	while($getMessageRow = mysqli_fetch_array($getMessageResult)) {	
	$FirstName=$getMessageRow['FirstName'];
	$message=$getMessageRow['message'];
	$messagesTable.='<tr><div style = "margin: 10;">';
	$messagesTable.='<td>	<h4 style = "color: #007bff;display:inline">';
	$messagesTable.=$FirstName;
	$messagesTable.='</h4></td>';
	$messagesTable.='<td>	<p class="text-center" style = "display:inline">';
	$messagesTable.=$message;
	$messagesTable.='</p></td>';
	
	$messagesTable.='</div></tr>';
 } 
} 
else { 
	$messagesTable.="<tr><td><p>No messages yet! Say 'Hi'</p></td></tr>";
}

$messagesTable.='</table>';
echo $messagesTable;

?>