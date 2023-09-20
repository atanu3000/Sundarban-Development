<?php 

$connect = mysqli_connect("localhost", "root", "", "project");
extract($_GET);

$time = time();
$query = "INSERT INTO cart SET product_id='$pid', client_id='$cid', time_stamp='$time'";
mysqli_query($connect, $query);
header("location: cart.php");
?>