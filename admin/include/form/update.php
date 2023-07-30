<?php

$connect = mysqli_connect("localhost", "root", "", "project");


    $product_id = $_POST['id'];
    $pname = $_POST["pname"];
    $price = $_POST["price"];

    $image = $_FILES["image"]["name"];
    $image = time() . $image;
    $path = $_FILES["image"]["tmp_name"];

    move_uploaded_file($path, "images/" . $image);

    $location = $_POST["location"];

    $d_location = "";
    if (isset($_POST["d_location"])) {
        $d_location = implode(", ", $_POST["d_location"]);
    }

    $pmode = $_POST["pmode"];
    echo "<script>alert('Product Updated');</script>";
    $update = "UPDATE products SET pname='$pname', price='$price', image='$image', location='$location', d_location='$d_location', pmode='$pmode' WHERE id = $product_id";

    $result = mysqli_query($connect, $update);

    if ($result) {
        echo "<script>alert('Product Updated');</script>";
        echo "<script>window.location.href = '../../products.php';</script>";
    }
    else {

    }


?>