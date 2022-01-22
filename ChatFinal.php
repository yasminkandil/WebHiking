<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hikingpr";
$conn = new mysqli($servername, $username, $password, $dbname);
?>

</head>
<body>

<div class="wrapper">
	<section class="chat-area">
		<header>
			<?php
			include_once 'style.html';
		  $ID = mysqli_real_escape_string($conn, $_GET['ID']);
          $sql = mysqli_query($conn, "SELECT * FROM user WHERE unique_id='$ID'");
          $row = mysqli_fetch_assoc($sql);
          
			?>
		 <img src="img/<?php echo $row['Photo']; ?>" alt="">
         <div class="details">
         <span><?php echo $row['FirstName']. " " . $row['LastName'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
        </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $ID; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="chat.js"></script>
</body>
</html>
