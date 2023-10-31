<?php
session_start();

if ($_SESSION['adminid'] == "" || !isset($_SESSION['adminid'])) {
    header("location: login.php");
}
$connect = mysqli_connect("localhost", "root", "", "project");
$adminId = $_SESSION['adminid'];

$query = "SELECT * FROM order_db ORDER BY order_id DESC";
$orders = mysqli_query($connect, $query);
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

                <div class="container-fluid">
                    <div>
                        <h3>Order Details</h3>
                        <table class="table table-bordered table-hover mt-3">
                            <thead>
                                <tr style="background: #9bb2f7; color: white">
                                    <th colspan="4">Product Details</th>
                                    <th colspan="5">Customer Details</th>
                                </tr>
                                <tr style="background: #9bb2f7; color: white">
                                    <th>Status</th>
                                    <th>Delivery Date</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Qn.</th>
                                    <th>Name</th>
                                    <th>Ph No</th>
                                    <th>Email</th>
                                    <th>Shipping Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (mysqli_num_rows($orders) > 0) {

                                    while ($order = mysqli_fetch_assoc($orders)) {
                                        $deliveryDate = date('M d, l', strtotime($order['added_date'] . ' +2 days'));
                                        $query = "SELECT products.*, client_db.*, order_db.*
                                    FROM products, order_db, client_db 
                                    WHERE client_db.id = " . $order['client_id'] . " AND products.id IN (" . $order['product_id'] . ")";
                                        $productsResult = mysqli_query($connect, $query);
                                        if ($productsResult) {
                                            $products = array();

                                            while ($product = mysqli_fetch_assoc($productsResult)) {
                                                $products[] = $product;
                                            }

                                            $pid = explode(",", $order["product_id"]);
                                            $quantity = explode(",", $order["quantity"]);

                                            $products = array_reverse($products);
                                            $pid = array_reverse($pid);
                                            $quantity = array_reverse($quantity);

                                            foreach ($products as $index => $product) {
                                                if (isset($quantity[$index])) { ?>
                                                    <tr <?php if (strtotime(date('Y-m-d')) >= strtotime($deliveryDate)) { ?>
                                                            style="background: #d9ffb3; color: #666;">
                                                            <td style="color: #4d9900; font-weight: bold">Delivered</td>
                                                        <?php } else { ?>
                                                            style="background: #ffffb3; color: #666" >
                                                            <td style="color: #cca300; font-weight: bold">Pending</td>
                                                        <?php } ?>
                                                        <td>
                                                            <?php echo $deliveryDate ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $product['pname']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $product['price']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $quantity[$index]; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $product['name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $product['ph_no']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $product['email']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $order['address']; ?>
                                                        </td>
                                                    </tr>
                                                <?php }
                                            }
                                        }
                                    }
                                } else { ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
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