<?php
    session_start();
    include_once "config.php";

    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    // $smt = "SELECT * FROM chat WHERE username LIKE '%{$searchTerm}%'";
    $smt = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND user_name LIKE '%{$searchTerm}%' ";
    $output = "";
    $sql = mysqli_query($conn, $smt);
    if(mysqli_num_rows($sql) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
