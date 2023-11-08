<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "project");
extract($_GET);

$pincode = trim($_POST['pincode']);
$ph_no = trim($_POST['ph_no']);
$city = trim($_POST['city']);
$state = trim($_POST['state']);
$district = trim($_POST['district']);
$address = trim($_POST['address']);

$query = "SELECT address FROM client_db WHERE id = " . $_SESSION['cid'];
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_assoc($result);
if (strlen(trim($result['address'])) == 0) {
    $address = $address. ', '. $city. ', '. $district. ', '. $state. ', '. $pincode;
}

$addrPart = explode(',', $address);
$address = $addrPart[0]. ', '. trim($addrPart[1]). ', '. $city. ', '. $district. ', '. $state. ', '. $pincode;

$query = "UPDATE client_db SET address = '$address', ph_no = '$ph_no', pincode = '$pincode', city = '$city', state = '$state', district = '$district' WHERE id = '$id'";


$result = mysqli_query($connect,$query);

if ($result) {
    header("location: checkout.php");
}

?>