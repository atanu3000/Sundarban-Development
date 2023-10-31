<?php

$connect = mysqli_connect("localhost",  "root", "", "project");

$pname = $_POST["pname"];
$price = $_POST["price"];
$discount = $_POST["discount"];

$image = $_FILES["image"]["name"];
$image = time().$image;
$path = $_FILES["image"]["tmp_name"];

move_uploaded_file($path, "images/".$image);

$category = $_POST["category"];

$rating = $_POST["rating"];

$query = "INSERT INTO products (pname, price, discount, image, category, rating) VALUES ('$pname', '$price', '$discount', '$image', '$category', '$rating')";

$result = mysqli_query($connect, $query);

if($result){
    echo "<script>alert('Product Added');</script>";
    echo "<script>window.location.href = 'products.php';</script>";
}

?>