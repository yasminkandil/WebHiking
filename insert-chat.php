<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $database="hikingpr";
    $conn=mysqli_connect($servername,$username,$password,$database);
    session_start();
    if(isset($_SESSION['unique_id'])){

        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')");
        }
    }
    
?>