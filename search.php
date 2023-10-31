<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "project");
$search_results = [];

if (isset($_POST['search-item'])) {
    if (strlen(str_replace(" ", "", $_POST['search-item'])) == 0) {
        header('location: products.php');
    }

} else {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php 
    $title = $_POST['search-item'];
?>
<?php include("./partials/head.php"); ?>

<body>
    <?php include("./partials/navbar.php") ?>
    <div class="cards flex flex-wrap justify-center gap-10 py-16 min-h-[calc(100vh-545px)] bg-gray-100">
    <?php 
    $search_item = $_POST['search-item'];

    // Sanitize the user input to prevent SQL injection (make sure to use a better method for production)
    $search_item = mysqli_real_escape_string($connect, $search_item);

    // Perform the search query
    $sql = "SELECT * FROM products WHERE pname LIKE '%$search_item%'";
    $res = mysqli_query($connect, $sql);

    $p_name = "SELECT pname FROM products WHERE pname LIKE '%$search_item%'";
    $p_name = mysqli_query($connect, $p_name);
    $p_name = mysqli_fetch_array($p_name);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) { ?>

            <div class="relative h-[420px] max-w-sm bg-white rounded-lg hover:scale-110 hover:shadow-2xl transition duration-300 ease-in-out">
                    <div class=" h-52">
                        <a href="#">
                            <img class="rounded-t-lg w-full h-full object-cover" src="admin/include/form/images/<?php echo $row['image']; ?>"
                                alt="" />
                        </a>
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white w-60">
                                <?php echo $row['pname'] ?>
                            </h5>
                        </a>
                        <div class="flex gap-3 items-center">
                            <p class="text-lg font-semibold">
                                <?php echo "&#8377; " . number_format($row['price'], 2, '.', ','); ?>
                            </p>
                            <span class="bg-[#0a472e] px-4 py-1 rounded-full w-max text-white flex gap-1 items-center">
                                <?php echo $row['rating']?>
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            </span>
                        </div>
                        <?php
                        $query = "SELECT * FROM cart WHERE product_id = ? AND client_id = ?";
                        $stmt = mysqli_prepare($connect, $query);

                        if ($stmt) {
                            mysqli_stmt_bind_param($stmt, "ii", $row['id'], $_SESSION['cid']);
                            mysqli_stmt_execute($stmt);

                            $check_to_cart = mysqli_stmt_get_result($stmt);
                        }
                        if (mysqli_num_rows($check_to_cart) == 0) { ?>
                            <a 
                            <?php if (isset($_SESSION['cid'])) { ?>
                                        href="add_to_cart.php?pid=<?php echo $row['id'] ?>&cid=<?php echo $_SESSION['cid'] ?>" 
                                    <?php } else { ?>
                                        href='./client/login.php' 
                                        onclick="alert('Login to access ADD TO CART');" 
                                    <?php } ?>
                                class="absolute bottom-4 inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-[#0a472e] rounded-full uppercase mt-2 hover:bg-green-700 mt-6">
                                <svg class="w-5 h-5 mr-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 19 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm1-4H5m0 0L3 4m0 0h5.501M3 4l-.792-3H1m11 3h6m-3 3V1" />
                                </svg>
                                Add to cart
                            </a>
                        <?php } else { ?>
                            <a href="cart.php" class="absolute bottom-2.5 inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-500 rounded-full uppercase mt-2 hover:bg-orange-400">
                                <svg class="w-5 h-5 mr-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 19 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm1-4H5m0 0L3 4m0 0h5.501M3 4l-.792-3H1m11 3h6m-3 3V1" />
                                </svg>
                                Go to cart
                            </a>
                        <?php } ?>
                    </div>
                </div>
        <?php }
    } else { ?>
        <p class="text-center text-xl">No such product to show :)</p>
    <?php } ?>
    </div>
    <?php include("./partials/footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>