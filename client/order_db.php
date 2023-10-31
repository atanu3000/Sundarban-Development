<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "project");
extract($_GET);

$pincode = $_POST['pincode'];
$ph_no = $_POST['ph_no'];
$city = $_POST['city'];
$state = $_POST['state'];
$district = $_POST['district'];
$address = $_POST['address'];

$query = "SELECT address FROM client_db WHERE id = " . $_SESSION['cid'];
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_assoc($result);
if (strlen(trim($result['address'])) == 0) {
    echo "entered";
    $address = $_POST['address']. ' '. $_POST['city']. ' '. $_POST['district']. ' '. $_POST['state']. ' - '. $_POST['pincode'];
}

$query = "UPDATE client_db SET address = '$address', ph_no = '$ph_no', pincode = '$pincode', city = '$city', state = '$state', district = '$district' WHERE id = '$id'";


$result = mysqli_query($connect,$query);

if ($result) {
    header("location: checkout.php");
}

?>