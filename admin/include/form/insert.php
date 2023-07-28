<?php

$connect = mysqli_connect("localhost",  "root", "", "project");

$pname = $_POST["pname"];
$price = $_POST["price"];

$image = $_FILES["image"]["name"];
$image = time().$image;
$path = $_FILES["image"]["tmp_name"];

move_uploaded_file($path, "images/".$image);

$location = $_POST["location"];

$d_location = "";
if(isset($_POST["d_location"])){
    $d_location = implode(", ", $_POST["d_location"]);
}

$pmode = $_POST["pmode"];

$query = "INSERT INTO products (pname, price, image, location, d_location, pmode) VALUES ('$pname', '$price', '$image', '$location', '$d_location', '$pmode')";

$result = mysqli_query($connect, $query);

if($result){
    echo "<script>alert('Product Added');</script>";
    echo "<script>window.location.href = '../../products.php';</script>";
}

?>