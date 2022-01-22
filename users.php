
<?php 
  session_start();
  $conn=new mysqli("localhost","root","","hikingpr");
  include_once "style.html";
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM user WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }

          ?>
          <img src="img/<?php echo $row['Photo']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['FirstName']. " " . $row['LastName'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
        <?php
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM user WHERE NOT unique_id = {$outgoing_id} ORDER BY ID DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
    ?>
      </div>
    </section>
  </div>

  <script src="users.js"></script>

</body>
</html>
