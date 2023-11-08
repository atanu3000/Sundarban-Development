<?php
session_start();

if ($_SESSION['adminid'] == "" || !isset($_SESSION['adminid'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php") ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include("include/sidebar.php") ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include("include/nav.php") ?>
                <?php

                $product_id = "";
                $pname = "";
                $price = "";
                $discount = "";
                $image = "";
                $category = "";
                $description = "";
                $rating = "";

                $connect = mysqli_connect("localhost", "root", "", "project");

                if (isset($_GET['id'])) {
                    $product_id = $_GET['id'];

                    $select = "SELECT * FROM products WHERE id = $product_id";
                    $select_res = mysqli_query($connect, $select);

                    if (mysqli_num_rows($select_res) > 0) {
                        $products = mysqli_fetch_array($select_res);
                        $pname = $products['pname'];
                        $price = $products['price'];
                        $discount = $products['discount'];
                        $image = $products['image'];
                        $category = $products['category'];
                        $rating = $products['rating'];
                    }
                }

                ?>

                <h1 class="text-center mb-5">
                    <?php echo $product_id ? 'Update Product' : 'Add New Product'; ?>
                </h1>
                <form action="<?php echo $product_id ? 'update.php?id=' : 'insert.php' ?>"
                    method="post" enctype="multipart/form-data" class="p-3 mx-auto" style="max-width: 600px;">
                    <input type="hidden" name="id" value="<?php echo $product_id; ?>">
                    <div class="mb-4">
                        <label for="price" class="form-label">Product Name</label>
                        <input type="text" value="<?php echo $pname ?>" name="pname" class="form-control"
                            placeholder="Name of product" required>
                    </div>
                    <div class="mb-4">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" value="<?php echo $price ?>" name="price" class="form-control"
                            placeholder="Price of product" required>
                    </div>
                    <div class="mb-4">
                        <label for="price" class="form-label">Discount</label>
                        <input type="text" value="<?php echo $discount ?>" name="discount" class="form-control"
                            placeholder="Discount on this product" required>
                    </div>
                    <div class="my-4">
                        <label class="form-label d-block fs-5">Give relevant images</label>
                        <input type="file" name="image" <?php if (!$product_id) {
                            echo "required";
                        } ?> />
                        <?php if ($product_id) { ?>
                            <img class="update_image" src="include/form/images/<?php echo $products['image']; ?>"
                                alt="product image">
                        <?php } ?>

                    </div>
                    <div class="my-4">
                        <label class="form-label">Category</label>
                        <input type="text" value="<?php echo $category ?>" name="category" class="form-control"
                            placeholder="Category of product" required>
                    </div>
                    <div class="my-4">
                        <label class="form-label">Rating</label>
                        <input type="text" value="<?php echo $rating ?>" name="rating" class="form-control"
                            placeholder="Rating of product" required>
                    </div>
                    <div class="my-4">
                        <button class="form-control btn btn-primary" type="submit">
                            <?php echo $product_id ? 'Save Changes' : 'Add Product' ?>
                        </button>
                    </div>
                </form>
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include("include/footer.php") ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

</body>

</html>