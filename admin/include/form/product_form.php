<?php

$product_id = "";
$pname = "";
$price = "";
$image = "";
$location = "";
$d_location = "";
$pmode = "";

$connect = mysqli_connect("localhost", "root", "", "project");

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    $select = "SELECT * FROM products WHERE id = $product_id";
    $select_res = mysqli_query($connect, $select);

    if (mysqli_num_rows($select_res) > 0) {
        $products = mysqli_fetch_array($select_res);
        $pname = $products['pname'];
        $price = $products['price'];
        $image = $products['image'];
        $location = $products['location'];
        $d_location = $products['d_location'];
        $pmode = $products['pmode'];
    }
}

?>

<h1 class="text-center mb-5"><?php echo $product_id ? 'Update Product' : 'Add New Product'; ?></h1>
<form action="<?php echo $product_id ? 'include/form/update.php?id=' : 'include/form/insert.php'?>" method="post" enctype="multipart/form-data" class="p-3 mx-auto"
    style="max-width: 600px;">
    <input type="hidden" name="id" value="<?php echo $product_id; ?>">
    <div class="mb-4">
        <label for="price" class="form-label">Product Name</label>
        <input type="text" value="<?php echo $pname?>" name="pname" class="form-control" placeholder="Name of product" required>
    </div>
    <div class="mb-4">
        <label for="price" class="form-label">Price</label>
        <input type="text" value="<?php echo $price?>" name="price" class="form-control" placeholder="Price of product" required>
    </div>
    <div class="my-4">
        <label class="form-label d-block fs-5">Give relevant images</label>
        <input type="file" name="image" required />
        <?php if($product_id) { ?>
                <img class="update_image" src="include/form/images/<?php echo $products['image']; ?>" alt="product image" >
        <?php } ?>
        
    </div>
    <div class="my-4">
        <label class="form-label">Location: </label>
        <select name="location" class="form-select form-control" aria-label="Default select example" required>
            <option value="">Choose your location</option>
            <option value="L1" <?php echo ($location == 'L1') ? 'selected' : '';?> >L1</option>
            <option value="L2" <?php echo ($location == 'L2') ? 'selected' : '';?> >L2</option>
            <option value="L3" <?php echo ($location == 'L3') ? 'selected' : '';?> >L3</option>
            <option value="L4" <?php echo ($location == 'L4') ? 'selected' : '';?> >L4</option>
        </select>
    </div>
    <div class="my-4">
        <label class="form-label">Delivery Location: &nbsp;&nbsp;</label>
        <label><input type="checkbox" name="d_location[]" value="A" <?php echo strpos($d_location, 'A') !== false ? 'checked' : ''; ?>>A</label>
        <label><input type="checkbox" name="d_location[]" value="B" <?php echo strpos($d_location, 'B') !== false ? 'checked' : ''; ?>>B</label>
        <label><input type="checkbox" name="d_location[]" value="C" <?php echo strpos($d_location, 'C') !== false ? 'checked' : ''; ?>>C</label>
    </div>
    <div class="my-4">
        <label class="form-label">Payment Mode: &nbsp;&nbsp;</label>
        <input type="radio" name="pmode" value="Cash" <?php echo ($pmode == 'Cash') ? 'checked' : '';?>>Cash
        <input type="radio" name="pmode" value="UPI" <?php echo ($pmode == 'UPI') ? 'checked' : '';?>>UPI
        <input type="radio" name="pmode" value="Net Banking" <?php echo ($pmode == 'Net Banking') ? 'checked' : '';?>>Net Banking
    </div>
    <div class="my-4">
        <button class="form-control btn btn-primary" type="submit"><?php echo $product_id ? 'Save Changes' : 'Add Product' ?></button>
    </div>
</form>