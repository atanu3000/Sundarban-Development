<?php 

$connect = mysqli_connect("localhost", "root", "", "project");

if(isset($_GET['id'])) {
    $product_id = $_GET['id'];

    $query = "DELETE FROM products WHERE id = $product_id";
    mysqli_query($connect, $query);

    header("Location: products.php");
}

?>