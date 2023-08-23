<?php

$connect = mysqli_connect("localhost", "root", "", "project");


$product_id = $_POST['id'];
$pname = $_POST["pname"];
$price = $_POST["price"];
$image = "";

if (isset($_FILES["image"]["name"])) {
    $image = $_FILES["image"]["name"];
    $image = time() . $image;
    $path = $_FILES["image"]["tmp_name"];

    move_uploaded_file($path, "images/" . $image);
}

$location = $_POST["location"];

$d_location = "";
if (isset($_POST["d_location"])) {
    $d_location = implode(", ", $_POST["d_location"]);
}

$pmode = $_POST["pmode"];

if ($_FILES['image']['name'] && $_FILES['image']['name'] != "") {
    $image = $_FILES["image"]["name"];
    $image = time() . $image;
    $path = $_FILES["image"]["tmp_name"];

    $imageArr = explode(".", $image);

    if ($imageArr[1] == "jpg" || $imageArr[1] == "jpeg" || $imageArr[1] == "png") {

        $sel = "SELECT * FROM products WHERE id='$product_id'";
        $res = $connect->query($sel);
        while ($row = $res->fetch_assoc()) {
            $pic = $row['image'];
            unlink("images/" . $pic);
        }

        move_uploaded_file($path, "images/" . $image);

        $update = "UPDATE products SET pname='$pname', price='$price', image='$image', location='$location', d_location='$d_location', pmode='$pmode' WHERE id = $product_id";

    }
} else {
    $update = "UPDATE products SET pname='$pname', price='$price', location='$location', d_location='$d_location', pmode='$pmode' WHERE id = $product_id";
}



$result = mysqli_query($connect, $update);

if ($result) {
    echo "<script>alert('Product Updated');</script>";
    echo "<script>window.location.href = '../../products.php';</script>";
} else {

}


?>