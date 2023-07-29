<?php
// Assuming you've already connected to your database here.
$connect = mysqli_connect("localhost", "root", "", "project");
$search_results = [];

if (isset($_POST['search_item'])) {
    $search_query = $_POST['search_item'];

    // Sanitize the user input to prevent SQL injection (make sure to use a better method for production)
    $search_query = mysqli_real_escape_string($connect, $search_query);

    // Perform the search query
    $sql = "SELECT * FROM products WHERE pname LIKE '%$search_query%'";
    $result = mysqli_query($connect, $sql);

    // Fetch search results into an array
    while ($row = mysqli_fetch_assoc($result)) {
        $search_results[] = $row;
    }

    // Close the database connection
    mysqli_close($connect);
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

                <div class="px-5">
                    <?php if (mysqli_num_rows($result) > 0) { ?>
                        <h2 class="text-center mb-5">Search Results</h2>
                        <table class="table table-striped table-hover border border-2">
                            <thead>
                                <tr>
                                    <th scope="col"><span> No</span>.</th>
                                    <th scope="col"><span> Product</span></th>
                                    <th scope="col"><span> Price</span></th>
                                    <th scope="col"><span> Location</span></th>
                                    <th scope="col"><span> Delivery Spots</span></th>
                                    <th scope="col"><span> Photo</span></th>
                                    <th scope="col"><span> Payment Mode</span></th>
                                    <th scope="col"><span> Edit</span></th>
                                    <th scope="col"><span> Delete</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($search_results as $products) { ?>
                                    <tr>
                                        <td scope="row">
                                            <span>
                                                <?php echo $products['id']; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                <?php echo $products['pname']; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                <?php echo $products['price']; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                <?php echo $products['location']; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                <?php echo $products['d_location']; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span id="center"><img src="include/form/images/<?php echo $products['image']; ?>" alt="product" class="products"></span>
                                        </td>
                                        <td>
                                            <span>
                                                <?php echo $products['pmode']; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                <a href="#" class="btn"> <i class="fa-solid fa-pen-to-square fa-xl"
                                                        style="color: #ffdd00;"></i></a>
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                <a href="#" class="btn"> <i class="fa-solid fa-trash fa-xl"
                                                        style="color: #ff0000;"></i></a>
                                            </span>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <h2 class="text-center">No products found with the given name.</h2>
                    <?php } ?>
                </div>
                <div class="text-center mt-4">
                    <a class="btn btn-primary" href="products.php">Back to Products</a>
                </div>
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