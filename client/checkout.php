<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "project");
extract($_GET);
if (!isset($_SESSION['cid'])) {
    header("Location: login.php");
}
$clientId = $_SESSION['cid'];

$query = "SELECT * FROM client_db WHERE id = ?";
$stmt = mysqli_prepare($connect, $query);
mysqli_stmt_bind_param($stmt, "i", $clientId);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_array($res);

$query = "SELECT products.*, cart.* 
                            FROM products 
                            INNER JOIN cart ON products.id = cart.product_id 
                            WHERE cart.client_id = ? 
                            ORDER BY cart.time_stamp DESC";
$stmt = mysqli_prepare($connect, $query);
mysqli_stmt_bind_param($stmt, "i", $clientId);
mysqli_stmt_execute($stmt);
$cart_products = mysqli_stmt_get_result($stmt);
$product_id = array();
$quantity = array();
$item_price = array();
$discounted_price = array();
$totalPrice = 0;
$discountedPrice = 0;
?>
<!DOCTYPE html>
<html lang="en">
<?php $title = " Checkout"; ?>
<?php include("../partials/head.php"); ?>

<body class="h-max" onload="<?php if (isset($_SESSION['shipping_address'])) {
        // unset($_SESSION['shipping_address']);
    }
    ?>">
    <nav class="bg-[#0a472e] py-4 pl-5 md:pl-20">
        <h1 class="text-2xl text-white font-semibold"><a href="../index.php">Sundarini</a></h1>
    </nav>
    <div
        class="cart w-full flex md:flex-row flex-col gap-5 md:gap-0 justify-center py-5 bg-gray-100 min-h-[calc(100vh-64px)]">
        <div class="md:w-4/6 mr-5">
            <ul class="flex flex-col gap-4 overflow-auto h-min">
                <li class="px-5 md:px-12 py-6 bg-white flex gap-4 shadow-lg">
                    <span class="flex items-center justify-center text-green-700  bg-green-100 w-7 h-7">1</span>
                    <div class="flex flex-col gap-1">
                        <p class="text-lg text-gray-500 font-semibold">Login</p>
                        <p>Customer &nbsp;<span class="font-semibold">
                                <?php echo $user['name'] ?>
                            </span></p>
                    </div>
                </li>
                <li class="flex flex-col gap-6 px-5 md:px-12 py-6 bg-white shadow-lg">
                    <div class="flex gap-4 justify-between">
                        <span
                            class="flex items-center absolute justify-center text-green-700 bg-green-100 w-7 h-7">2</span>
                        <div class="flex flex-col gap-1 relative left-12 max-w-[800px]">
                            <p class="text-lg text-gray-500 font-semibold">
                                <?php if (strlen(trim($user['address'])) == 0) { ?>
                                    Enter shipping Address
                                <?php } else if (!isset($_SESSION['shipping_address'])) { ?>
                                        Choose shipping address
                                <?php } else { ?>
                                        Shipping Address
                                <?php } ?>
                            </p>
                            <p>
                                <?php echo $user['address'] ?>
                            </p>
                            <?php if (strlen(trim($user['address'])) != 0 && !isset($_SESSION['shipping_address'])) { ?>
                                <div class="flex gap-4">
                                    <a href="address-check.php?user_address=<?php echo $user['address'] ?>"
                                        class="px-6 py-2 bg-[#0a472e] text-white w-max uppercase mt-5">confirm
                                        address ?</a>
                                    <button data-modal-target="newAddressModal" data-modal-toggle="newAddressModal"
                                        data-prefill="none"
                                        class="px-6 py-2 border-2 text-green-800 hover:bg-[#0a472e] hover:text-white w-max uppercase mt-5">new
                                        address</button>
                                    <!-- shipping address modal -->
                                    <div data-modal-target="newAddressModal" id="newAddressModal" tabindex="-1"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-4xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <div class="px-6 py-6 lg:px-8">
                                                    <h3 id="modalTitle"
                                                        class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Enter
                                                        new shipping address</h3>
                                                    <?php include("../partials/address_form.php") ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <?php if (strlen(trim($user['address'])) != 0) { ?>
                            <button data-modal-target="editAddressModal" data-modal-toggle="editAddressModal"
                                data-prefill="user_data"
                                class="px-6 py-2 h-max text-green-800 font-semibold ml-3 uppercase">edit</button>
                            <div data-modal-target="editAddressModal" id="editAddressModal" tabindex="-1"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-4xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 id="modalTitle"
                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit
                                                shipping address</h3>
                                            <?php
                                            $pincode = "";
                                            $ph_no = "";
                                            $address = "";
                                            $city = "";
                                            $district = "";
                                            $state = "";

                                            $connect = mysqli_connect("localhost", "root", "", "project");
                                            $query = "SELECT * FROM client_db WHERE id = '$clientId'";
                                            $result = mysqli_query($connect, $query);

                                            if (mysqli_num_rows($result) > 0) {
                                                $client = mysqli_fetch_assoc($result);
                                                $pincode = $client['pincode'];
                                                $ph_no = $client['ph_no'];
                                                $address = $client['address'];
                                                $city = $client['city'];
                                                $district = $client['district'];
                                                $state = $client['state'];
                                            }
                                            ?>
                                            <form action="order_db.php?id=<?php echo $clientId ?>" method="post"
                                                enctype="multipart/form-data">
                                                <div class="grid md:grid-cols-2 md:gap-6">
                                                    <div class="relative z-0 w-full mb-6 group">
                                                        <input type="text" name="pincode" id="floating_first_name"
                                                            value="<?php echo $pincode ?>"
                                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                            placeholder=" " required />
                                                        <label for="floating_first_name"
                                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pincode</label>
                                                    </div>
                                                    <div class="relative z-0 w-full mb-6 group">
                                                        <input type="number" name="ph_no" id="floating_last_name"
                                                            value="<?php echo $ph_no ?>"
                                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                            placeholder=" " autocomplete="off" required />
                                                        <label for="floating_last_name"
                                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mobile
                                                            Number</label>
                                                    </div>
                                                </div>
                                                <div class="relative z-0 w-full mb-6 group">
                                                    <input type="text" name="address" id="floating_repeat_password"
                                                        value="<?php echo $address ?>"
                                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                        placeholder=" " required />
                                                    <label for="floating_repeat_password"
                                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                                                </div>
                                                <div class="grid md:grid-cols-2 md:gap-6">
                                                    <div class="relative z-0 w-full mb-6 group">
                                                        <input type="text" name="city" id="floating_first_name"
                                                            value="<?php echo $city ?>"
                                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                            placeholder=" " required />
                                                        <label for="floating_first_name"
                                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">City</label>
                                                    </div>
                                                    <div class="relative z-0 w-full mb-6 group">
                                                        <input type="text" name="district" id="floating_last_name"
                                                            value="<?php echo $district ?>"
                                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                            placeholder=" " required />
                                                        <label for="floating_last_name"
                                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">District</label>
                                                    </div>
                                                </div>
                                                <div class="grid md:grid-cols-2 md:gap-6">
                                                    <div class="relative z-0 w-full mb-6 group">
                                                        <input type="tel" name="state" id="floating_phone"
                                                            value="<?php echo $state ?>"
                                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                            placeholder=" " required />
                                                        <label for="floating_phone"
                                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">State</label>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <button type="submit"
                                                        class="text-white bg-[#0a472e] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center uppercase ml-auto">use
                                                        this address
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php
                    extract($_GET);
                    if (strlen(trim($user['address'])) == 0) { ?>
                        <div>
                            <?php include("../partials/address_form.php") ?>

                        </div>
                    <?php } ?>
                </li>
                <li class=" bg-white flex flex-col gap-4 shadow-lg pb-6">
                    <div class="flex gap-4 md:px-12 pt-6 ">
                        <span class="flex items-center justify-center text-green-700 bg-green-100 w-7 h-7">3</span>
                        <p class="text-lg text-gray-500 font-semibold">Oder Summary</p>
                    </div>
                    <?php if (strlen(trim($user['address'])) != 0 && isset($_SESSION['shipping_address'])) { ?>
                        <div class="flex flex-col">
                            <?php while ($item = mysqli_fetch_assoc($cart_products)) {
                                // print_r($item);
                                array_push($product_id, $item['product_id']);
                                array_push($quantity, $item['quantity']);
                                ?>

                                <div
                                    class="flex flex-col items-center bg-white border-gray-200 hover:shadow md:flex-row md:min-w-full hover:bg-green-50 md:px-12 p-5">
                                    <div class="md:h-24 md:w-24 h-72">
                                        <img class="object-contain h-full w-full rounded"
                                            src="../admin/include/form/images/<?php echo $item['image']; ?>" alt="img">
                                    </div>
                                    <div class="flex flex-col justify-between px-4 leading-normal">
                                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">
                                            <?php echo $item['pname']; ?>
                                        </h5>
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
                                            <a href="../remove_from_cart.php?pid=<?php echo $item['product_id'] ?>&cid=<?php echo $_SESSION['cid'] ?>"
                                                class="text-sm uppercase font-medium hover:text-red-500">remove</a>
                                        </div>
                                    </div>
                                    <p class="text-sm font-medium ml-auto mb-auto">
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
                                <hr>
                            <?php } ?>

                        </div>
                    </li>
                    <li class="px-5 md:px-12 py-3 bg-white flex justify-between items-center gap-4 shadow-lg">
                        <p>Order confirmation email will be sent to <span class="font-semibold">
                                <?php echo $user['email'] ?>
                            </span></p>
                        <button id="rzp-button1"
                            class="bg-[#0a472e] hover:bg-green-800 text-white px-12 py-3 text-xl font-light">Continue</button>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <?php if (strlen(trim($user['address'])) != 0 && isset($_SESSION['shipping_address'])) { ?>
            <div class="bg-white md:w-1/4 h-max pb-5 rounded shadow-lg">
                <div class="py-5 border-b-2 h-[69.6px] bg-green-100">
                    <p class="text text-green-600 pl-3 font-medium uppercase">price details</p>
                </div>
                <?php

                extract($_GET);
                foreach ($item_price as $price) {
                    $totalPrice += $price;
                }

                foreach ($discounted_price as $price) {
                    $discountedPrice += $price;
                }
                ?>
                <div class="px-5 py-5 flex flex-col gap-5">
                    <div class="flex justify-between">
                        <p>Price(
                            <?php
                            $query = "SELECT SUM(quantity) AS quantity FROM cart WHERE client_id = '$clientId'";
                            $productQuantity = mysqli_fetch_assoc(mysqli_query($connect, $query));
                            echo $productQuantity["quantity"];
                            ?> items)
                        </p>
                        <span class="font-medium">
                            <?php echo "&#8377; " . number_format($discountedPrice, 2, '.', ','); ?>
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <p>Delivery Charges</p>
                        <div class="ml-auto">
                            <span class="line-through">
                                <?php
                                $deliveryCharges = $productQuantity["quantity"] * 40;
                                echo " &#8377; " . number_format($deliveryCharges, 2, '.', ',');
                                ?>
                            </span>
                            <span class="font-medium text-green-500 pl-1.5">Free</span>
                        </div>
                    </div>

                    <hr>
                    <div class="flex justify-between">
                        <span class="text-xl font-semibold">Total Payable</span>
                        <span class="text-xl font-semibold">
                            <?php
                            echo " &#8377; " . number_format($discountedPrice, 2, '.', ',');
                            ?>
                        </span>
                    </div>
                </div>
                <hr>
                <p class="text-green-600 font-semibold p-5">
                    Your Total Savings on this order
                    <?php
                    $discountPrice = $totalPrice - $discountedPrice;
                    echo "&#8377;" . number_format($discountPrice, 2, '.', ',');
                    ?>
                </p>
            </div>
        <?php } ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
        <?php if (strlen(trim($user['address'])) != 0 && isset($_SESSION['shipping_address'])) { ?>
            var options = {
                "key": "rzp_test_llqhLLhWjO5nPn",
                "amount": "<?php echo $discountedPrice * 100 ?>",
                "currency": "INR",
                "name": "Sundarini",
                "description": "Test Transaction",
                "image": "../asset/logo.png",
                "handler": function (response) {
                    let paymentId = response.razorpay_payment_id;
                    let productIds = <?php echo json_encode($product_id) ?>;
                    console.log(productIds);
                    let quantity = <?php echo json_encode($quantity) ?>;
                    $.ajax({
                        url: "payment-process.php",
                        type: "POST",
                        data: {
                            product_id: productIds,
                            quantity: quantity,
                            payment_id: paymentId,
                            client_id: <?php echo $user['id'] ?>
                        },
                        success: function (final_response) {
                            if (final_response == 'done') {
                                window.location.href = "http://localhost/Sundarban-Development/client/success.php";
                            } else {
                                console.log(final_response);
                            }
                        }
                    })
                },
                "prefill": {
                    "name": "<?php echo $user['name'] ?>",
                    "email": "<?php echo $user['email'] ?>",
                    // "contact": "9000090000"
                },
                "theme": {
                    "color": "#3399cc"
                }
            };
            var rzp1 = new Razorpay(options);
            document.getElementById('rzp-button1').addEventListener('click', function (e) {
                rzp1.open();
                e.preventDefault();
            })
        <?php } ?>
    </script>
</body>

</html>