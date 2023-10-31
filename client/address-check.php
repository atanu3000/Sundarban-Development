<?php 
session_start();
extract($_GET);

if (!isset($_SESSION['shipping_address'])) {
    $_SESSION['shipping_address'] = $user_address;
    header("location: checkout.php");
}
?>
