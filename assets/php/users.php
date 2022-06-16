<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$query = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY unique_id DESC";
// $outgoing_id = $_SESSION['unique_id'];
// $query = "SELECT * FROM chat";
$sql = mysqli_query($conn, $query);
$output = "";
if (mysqli_num_rows($sql) == 1) {
    $output .= "No users are available to chat";
} elseif (mysqli_num_rows($sql) > 0) {
    include_once "data.php";
}
echo $output;
