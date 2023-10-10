<?php 

$connect = mysqli_connect("localhost", "root", "", "project");
extract($_GET);

$query = "DELETE FROM cart WHERE client_id=".$cid." AND product_id=".$pid;
mysqli_query($connect, $query);
header("location: cart.php");

?>