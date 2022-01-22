<?php
    session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $database="hikingpr";
    $conn=mysqli_connect($servername,$username,$password,$database);

    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $sql = "SELECT * FROM user WHERE NOT unique_id = {$outgoing_id} AND (FirstName LIKE '%{$searchTerm}%' OR LastName LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>