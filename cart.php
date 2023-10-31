<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php $title = " Cart";
$totalPrice = 0;
$discountedPrice = 0;
$item_price = array();
$discounted_price = array(); ?>
<?php include("./partials/head.php"); ?>

<body>
    <?php include("./partials/navbar.php"); ?>

    <div
        class="relative cart w-full min-h-[calc(100vh-72px)] flex md:flex-row flex-col gap-15 md:gap-0 justify-center py-5 bg-gray-100">
        <?php if (isset($_SESSION['cid'])) {
            $connect = mysqli_connect("localhost", "root", "", "project");
            $clientId = $_SESSION['cid'];

            $query = "SELECT products.*, cart.* 
            FROM products 
            INNER JOIN cart ON products.id = cart.product_id 
            WHERE cart.client_id = ? 
            ORDER BY cart.time_stamp DESC";
            $stmt = mysqli_prepare($connect, $query);

            mysqli_stmt_bind_param($stmt, "i", $clientId);

            mysqli_stmt_execute($stmt);

            $res = mysqli_stmt_get_result($stmt);

            $query = "SELECT SUM(quantity) AS quantity FROM cart WHERE client_id = '$clientId'";
            $quantity = mysqli_fetch_assoc(mysqli_query($connect, $query));
            ?>


            <div class="items flex flex-col bg-white md:w-4/6 rounded shadow-lg h-max mr-5">
                <div class="py-5 border-b-2 bg-green-100">
                    <p class="text-xl text-green-600 pl-12">Total item (
                        <?php if (isset($quantity['quantity']))
                            echo $quantity['quantity'];
                        else
                            echo 0; ?> )
                    </p>
                </div>
                <?php

                if (mysqli_num_rows($res) > 0) {
                    while ($item = mysqli_fetch_assoc($res)) { ?>

                        <div
                            class="flex flex-col w-full items-center bg-white border-gray-200 hover:shadow md:flex-row  hover:bg-green-50 py-5 px-10">
                            <div class="flex flex-col">
                                <div class="md:h-36 md:w-36 h-72">
                                    <img class="object-contain h-full w-full rounded"
                                        src="admin/include/form/images/<?php echo $item['image']; ?>" alt="">
                                </div>
                                <div class="flex gap-2 items-center mt-5 justify-center">

                                    <a href="./add_to_cart.php?action=dec&pid=<?php echo $item['product_id'] ?>&cid=<?php echo $_SESSION['cid'] ?>"
                                        class="flex items-center justify-center pb-1.5 text-3xl w-7 h-7 rounded-full border-2
                                        <?php
                                        if ($item['quantity'] < 2) { ?>
                                            pointer-events-none text-gray-300
                                        <?php } ?>
                                        ">-</a>
                                    <span class="p-y2 px-4 border-2">
                                        <?php echo $item['quantity'] ?>
                                    </span>
                                    <a href="./add_to_cart.php?action=inc&pid=<?php echo $item['product_id'] ?>&cid=<?php echo $_SESSION['cid'] ?>"
                                        class="flex items-center justify-center pb-1 text-xl w-7 h-7 rounded-full border-2">+</a>
                                </div>
                            </div>
                            <div class="flex justify-between h-[192px] py-1 w-full">
                                <div class="flex flex-col justify-between px-4 max-w-[400px]">
                                    <h5 class="text-xl font-bold tracking-tight text-gray-900">
                                        <?php echo $item['pname']; ?>
                                    </h5>
                                    <p class="my-1 text-gray-500 text-sm">
                                        category:
                                        <?php echo $item['category'] ?>
                                    </p>
                                    <div class="flex items-center gap-3">
                                        <p class="text-sm text-gray-500 line-through font-semibold">
                                            <?php
                                            $price = $item['price'] * $item['quantity'];
                                            array_push($item_price, $price);
                                            echo "&#8377;" . number_format($price, 2, '.', ','); ?>
                                        </p>
                                        <p class="text-xl font-semibold">
                                            <?php
                                            $discount = $item['price'] * ($item['discount'] / 100);
                                            $price = ($item['price'] - $discount) * $item['quantity'];
                                            array_push($discounted_price, $price);
                                            echo "&#8377;" . number_format($price, 2, '.', ','); ?>
                                        </p>
                                        <p class="text-green-600 font-semibold">
                                            <?php echo $item['discount'] ?>% off
                                        </p>
                                    </div>

                                    <div class="flex gap-5 mt-5">
                                        <a href="./remove_from_cart.php?pid=<?php echo $item['product_id'] ?>&cid=<?php echo $_SESSION['cid'] ?>"
                                            class="text-sm uppercase font-medium hover:text-red-500">remove</a>
                                    </div>
                                </div>
                                <p class="text-sm font-medium">
                                    Delivery by
                                    <?php
                                    $deliveryDate = date('D M d', strtotime(date('y-m-d') . ' +2 days'));
                                    echo $deliveryDate;
                                    ?>
                                    | <span class="line-through text-gray-600 font-normal">
                                        <?php echo "&#8377;" . $item['quantity'] * 40 ?>
                                    </span>
                                    <span class="text-green-600">Free</span>
                                </p>
                            </div>
                        </div>
                        <hr>
                    <?php }

                    foreach ($item_price as $price) {
                        $totalPrice += $price;
                    }

                    foreach ($discounted_price as $price) {
                        $discountedPrice += $price;
                    }

                    ?>
                    <div class="w-full flex py-5 ">
                        <a href="client/checkout.php"
                            class="bg-green-500 hover:bg-green-600 text-white px-12 py-3 ms-auto me-5">Place Order</a>
                    </div>

                <?php } else { ?>
                    <div class="flex flex-col items-center gap-6 mx-auto my-32 w-11/12 sm:w-96">
                        <p class="text-2xl text-gray-600 text-center">Your cart is empty!</p>
                        <a href="./products.php"
                            class="w-max inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg uppercase mt-2 hover:bg-blue-800">
                            Shop Now
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="static bg-white md:w-1/4 h-max pb-5 rounded shadow-lg">
                <div class="py-5 border-b-2 h-[69.6px] bg-green-100">
                    <p class="text text-green-600 pl-3 font-medium uppercase">price details</p>
                </div>
                <div class="px-5 py-5 flex flex-col gap-5">
                    <div class="flex justify-between">
                        <p>Price(
                            <?php if (isset($quantity['quantity']))
                                echo $quantity['quantity'];
                            else
                                echo 0; ?> items)
                        </p>
                        <span class="font-medium">
                            <?php echo "&#8377;" . number_format($totalPrice, 2, '.', ','); ?>
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <p>Discount</p>
                        <span class="font-medium text-green-500">
                            <?php
                            $discountPrice = $totalPrice - $discountedPrice;
                            echo "- &#8377;" . number_format($discountPrice, 2, '.', ',');
                            ?>
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <p>Delivery Charges</p>
                        <div class="ml-auto">
                            <span class="line-through">
                                <?php
                                $deliveryCharges = $quantity["quantity"] * 40;
                                echo " &#8377;" . number_format($deliveryCharges, 2, '.', ',');
                                ?>
                            </span>
                            <span class="font-medium text-green-500 pl-1.5">Free</span>
                        </div>
                    </div>

                    <hr>
                    <div class="flex justify-between">
                        <span class="text-xl font-semibold">Total Price</span>
                        <span class="text-xl font-semibold">
                            <?php
                            // $discountedPrice = $totalPrice * 0.75;
                            echo " &#8377;" . number_format($discountedPrice, 2, '.', ',');
                            ?>
                        </span>
                    </div>
                    <hr>
                    <p class="text-green-600 font-semibold">
                        You will save on
                        <?php
                        $discountPrice = $totalPrice - $discountedPrice;
                        echo "&#8377;" . number_format($discountPrice, 2, '.', ',');
                        ?>
                        this order
                    </p>
                </div>
            </div>
        <?php } else { ?>
            <div class="bg-white w-9/12 mx-auto h-max py-10">
                <div class="flex flex-col items-center justify-center gap-5">
                    <img src="./asset/cart.png" alt="cart" width="100px">
                    <h3 class="text-xl">Missing cart items?</h3>
                    <p>Login to see the items you added previously</p>
                    <a href="./client/login.php"
                        class="bg-[#0a472e] hover:bg-green-800 text-white px-12 py-3 text-xl font-light">Login</a>
                </div>
            </div>
        </div>
    <?php } ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>