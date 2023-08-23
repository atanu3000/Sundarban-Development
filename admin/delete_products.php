<?php

$connect = mysqli_connect("localhost", "root", "", "project");

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // delete from server
    $sel = "SELECT * FROM products WHERE id='$product_id'";
    $res = $connect->query($sel);
    while ($row = $res->fetch_assoc()) {
        $pic = $row['image'];
        unlink("include/form/images/" . $pic);
    }

    $query = "DELETE FROM products WHERE id = $product_id";
    mysqli_query($connect, $query);

    header("Location: products.php");
}

?>