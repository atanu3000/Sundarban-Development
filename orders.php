<?php
session_start();
if (!isset($_SESSION["cid"])) {
    header("Location: ./client/login.php");
}

$connect = mysqli_connect("localhost", "root", "", "project");
$clientId = $_SESSION['cid'];

$query = "SELECT * FROM order_db WHERE client_id = " . $clientId . " ORDER BY order_id DESC";
$orders = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html lang="en">
<?php $title = " Orders"; ?>
<?php include("./partials/head.php"); ?>

<body class="bg-gray-100">
    <?php include("./partials/navbar.php") ?>
    <div class="w-9/12 mx-auto py-12">
        <h3 class="text-3xl text-green-800 font-semibold mb-6">Your Orders</h3>
        <hr class="h-[1.5px] bg-gray-300">
        <?php if (mysqli_num_rows($orders) > 0) {

            while ($order = mysqli_fetch_assoc($orders)) {
                $deliveryDate = date('M d, l', strtotime($order['added_date'] . ' +2 days'));
                $query = "SELECT * FROM products WHERE id IN (" . $order['product_id'] . ")";
                $productsResult = mysqli_query($connect, $query);

                if ($productsResult) {
                    $products = array();
            
                    while ($product = mysqli_fetch_assoc($productsResult)) {
                        $products[] = $product;
                    }
  
                    $quantity = explode(",", $order["quantity"]);
                    $products = array_reverse($products);
                
                foreach ($products as $index => $product) { ?>

                    <div class="flex flex-col gap-4 mt-4">
                        <div class="flex gap-3 px-20 py-4 bg-white rounded-sm">
                            <img class="w-20 h-20" src="admin\include\form\images\<?php echo $product['image'] ?>" alt="">
                            <div class="flex justify-between px-4 w-full">
                                <div class="flex flex-col gap-1 w-[350px]">
                                    <h2 class=" font-semibold">
                                        <?php echo $product['pname'] ?>
                                    </h2>
                                    <div class="flex gap-3">
                                        <p class="text-gray-500 text-sm">Category:
                                            <?php echo $product['category'] ?>
                                        </p>
                                        <p class="text-gray-500 text-sm">quantity:
                                            <?php echo $quantity[$index] ?>
                                        </p>
                                    </div>
                                </div>
                                <span class="font-bold text-lg w-20">
                                    <?php echo "&#8377; " . number_format($product['price'] * $quantity[$index], 2, '.', ',') ?>
                                </span>
                                <div class="flex flex-col gap-1 w-64">
                                    <?php if (strtotime(date('Y-m-d')) >= strtotime($deliveryDate)) { ?>
                                        <div class="flex items-center gap-2 font-semibold">
                                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                            Delivered on
                                            <?php echo $deliveryDate ?>
                                        </div>
                                        <p class="text-gray-500 text-xs font-semibold">
                                            Your item has been placed
                                            </span>
                                        </p>

                                    <?php } else { ?>
                                        <div class="flex items-center gap-2 font-semibold">
                                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                            Order confirmed
                                        </div>
                                        <p class="text-gray-500 text-xs font-semibold">
                                            Expected delivery by <span class="font-bold">
                                                <?php
                                                $twoDaysLater = $deliveryDate;

                                                echo $twoDaysLater;
                                                ?>
                                            </span>
                                        </p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                }
            }

        } else { ?>

            <div class="flex flex-col gap-9 items-center mt-20">
                <p class="text-xl text-gray-500 font-semibold text-center mt-10">
                    Looks like you haven't placed an order.
                </p>
                <a href="./products.php" class="bg-[#0a472e] px-6 py-2 text-white capitalize">Visit our products</a>
            </div>
        <?php } ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>