<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php $title = " About"; ?>
<?php include("./partials/head.php"); ?>

<body>
    <?php include("./partials/navbar.php") ?>
    <?php $connect = mysqli_connect("localhost", "root", "", "project");

    $query = "SELECT products.*, cart.*
    FROM products
    INNER JOIN cart ON products.id = cart.product_id
    WHERE cart.client_id = " . $_SESSION['cid'] . "
    ORDER BY cart.time_stamp DESC";

    $res = mysqli_query($connect, $query); ?>

    <div class="cart w-full flex md:flex-row flex-col gap-5 md:gap-0 justify-evenly py-5 bg-gray-100">
        <div class="items flex flex-col bg-white md:w-9/12 rounded shadow-lg min-h-[calc(100vh-272px)]">
            <div class="py-5 border-b-2">
                <p class="text-xl text-blue-500 pl-12">Total item (<?php echo mysqli_num_rows($res) ?>)
                </p>
            </div>
            <?php if (mysqli_num_rows($res) > 0) {
                while ($item = mysqli_fetch_array($res)) { ?>

                    <div
                        class="flex flex-col items-center bg-white border-gray-200 hover:shadow md:flex-row md:min-w-full hover:bg-gray-100 p-5">
                        <div class="md:h-52 md:w-52 h-72">
                            <img class="object-contain h-full w-full rounded"
                                src="admin/include/form/images/<?php echo $item['image']; ?>" alt="">
                        </div>
                        <div class="flex flex-col justify-between px-4 leading-normal">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">
                                <?php echo $item['pname']; ?>
                            </h5>
                            <p class="mb-3 font-normal text-gray-700 text-sm">Here are the biggest enterprise technology
                                acquisitions of 2021 so far, in reverse chronological order.</p>
                            <p class="text-lg font-semibold">
                                <?php echo "&#8377; " . number_format($item['price'], 2, '.', ','); ?>
                            </p>
                            <div class="flex gap-5 mt-5">
                                <a href="#" class="text-sm uppercase font-medium hover:text-blue-500">by now</a>
                                <a href="./remove_from_cart.php?pid=<?php echo $item['product_id'] ?>&cid=<?php echo $_SESSION['cid'] ?>" class="text-sm uppercase font-medium hover:text-blue-500">remove</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php }

            } else { ?>
                <div class="flex flex-col items-center gap-6 mx-auto my-20 w-11/12 sm:w-96">
                    <p class="text-2xl text-gray-600 text-center">Your cart is empty!</p>
                    <a href="./products.php"
                        class="w-max inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg uppercase mt-2 hover:bg-blue-800">
                        Shop Now
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="bg-white md:w-1/5 h-max pb-5 rounded shadow-lg">
            <div class="py-5 border-b-2 h-[69.6px]">
                <p class="text text-gray-500 pl-3 font-medium uppercase">price details</p>
            </div>
            <?php
            $query = "SELECT SUM(price) AS total_price
            FROM products
            INNER JOIN cart ON products.id = cart.product_id
            WHERE cart.client_id = " . $_SESSION['cid'];
            $result = mysqli_query($connect, $query);

            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="px-3 py-5 flex flex-col gap-5">
                <div class="flex justify-between">
                    <p>Price(<?php echo mysqli_num_rows($res) ?> items)</p>
                    <span class="font-medium"><?php echo "&#8377; " . number_format($row['total_price'], 2, '.', ','); ?></span>    
                </div>
                <div class="flex justify-between">
                    <p>Discount</p>
                    <span class="font-medium text-green-500">
                        <?php 
                            $discountPrice = $row['total_price'] * 0.25;
                            echo "- &#8377; " . number_format($discountPrice, 2, '.', ','); 
                        ?>
                    </span>    
                </div>
                <div class="flex justify-between">
                    <p>Delivery Charges</p>
                    <div class="ml-auto">
                        <span class="line-through">
                            <?php 
                                $deliveryCharges = mysqli_num_rows($res) * 40;
                                echo " &#8377; " . number_format($deliveryCharges, 2, '.', ','); 
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
                            $totalPrice = $row['total_price'] * 0.75;
                            echo " &#8377; " . number_format($totalPrice, 2, '.', ','); 
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>