<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "project");
date_default_timezone_set("Asia/Kolkata"); // Corrected timezone

$paymentId = $_POST["payment_id"];
$clientId = $_POST["client_id"];
$productIds = $_POST["product_id"]; 
$quantity = $_POST["quantity"];
$address = '';

if(isset($_SESSION['shipping_address'])){
    $address = $_SESSION['shipping_address'];
}

$addedDate = date("Y-m-d H:i:s");

// Convert the product IDs array to a comma-separated string for the SQL query
$productIdsString = implode(",", $productIds);
$quantityString = implode(",", $quantity);

$query = "INSERT INTO order_db (product_id, quantity, payment_id, client_id, address, added_date) VALUES ('$productIdsString', '$quantityString', '$paymentId', '$clientId', '$address', '$addedDate')";

$result = mysqli_query($connect, $query);

if ($result) {
    echo 'done';
    $_SESSION['payment_id'] = $paymentId;
    $query = "DELETE FROM cart WHERE client_id = $clientId";
    mysqli_query($connect, $query);
} else {
    echo mysqli_error($connect);
    echo "<script>alert(".mysqli_error($connect).");</script>";
}

?>
