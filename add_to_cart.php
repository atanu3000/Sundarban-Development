<?php 

$connect = mysqli_connect("localhost", "root", "", "project");
extract($_GET);

$time = time();

if (isset($action)) {
    $query = "SELECT * FROM cart WHERE product_id = '$pid' AND client_id = '$cid'";
    $result = mysqli_query($connect, $query);
    $result = mysqli_fetch_assoc($result);
    $quantity = $result['quantity'];
    if ($action == "inc") {
        $quantity += 1;
        $query = "UPDATE cart SET quantity = '$quantity' WHERE product_id = '$pid' AND client_id = '$cid'";
    } else {
        $quantity -= 1;
        $query = "UPDATE cart SET quantity = '$quantity' WHERE product_id = '$pid' AND client_id = '$cid'";
    }
} else {
    $query = "INSERT INTO cart SET product_id='$pid', client_id='$cid', time_stamp='$time'";
}

mysqli_query($connect, $query);

header("location: cart.php");
?>