<nav class="bg-[#0a472e] border-green-200 dark:bg-green-900 relative">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 px-6">
        <a href="index.php" class="text-2xl text-white font-semibold">Sundarini</a>
        <div class="flex md:order-2 order-1 justify-between w-full md:w-fit rounded-lg overflow-hidden">
            <button data-collapse-toggle="navbar-search" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-slate-500 rounded-lg md:hidden hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-200 dark:text-slate-400 dark:hover:bg-green-700 dark:focus:ring-green-600"
                aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="relative hidden md:block md:w-[350px] xl:w-[500px]">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-slate-500 dark:text-slate-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <form method="post" action="search.php">
                    <input type="text" id="search-navbar" name="search-item"
                        class="block w-full p-2 pl-10 text-sm text-black border border-green-300" autocomplete="off"
                        placeholder="Search for products">
                </form>
            </div>
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                aria-expanded="false"
                class="md:hidden text-slate-500 dark:text-slate-400 hover:bg-green-100 dark:hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-200 dark:focus:ring-green-700 rounded-lg text-sm p-2.5 mr-1">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
        <div class="hidden md:flex md:order-3 gap-3 items-center text-white font-semibold gap-5">
            <!-- <a href="products.php">Products</a> -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto" id="navbar-search">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-slate-500 dark:text-slate-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <form>
                        <input type="text" id="search-navbar"
                            class="block w-full p-2 pl-10 text-sm text-slate-900 border border-green-300 rounded-lg bg-green-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Searching...">
                    </form>
                </div>
                <ul
                    class="flex flex-col gap-3 p-4 md:p-0 mt-4 font-medium border border-green-100 rounded-lg bg-green-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-green-800 md:dark:bg-green-900 dark:border-green-700">
                    <li>
                        <button id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white bg-[#0a472e] rounded md:w-auto md:border-0 md:p-0"
                            aria-expanded="false">Products
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                    </li>
                    <li class="md:hidden">
                        <a href="/Sundarban-Development/"
                            class="block py-2 pl-3 pr-4 text-slate-900 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li class="md:hidden">
                        <a href="products.php"
                            class="block py-2 pl-3 pr-4 text-slate-900 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Products</a>
                    </li>
                    <li class="md:hidden">
                        <a href="cart.php"
                            class="block py-2 pl-3 pr-4 text-slate-900 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Cart</a>
                    </li>
                    <li class="md:hidden">
                        <a href="aboutus.php"
                            class="block py-2 pl-3 pr-4 text-slate-900 rounded hover:bg-green-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-green-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-green-700">About
                            Us</a>
                    </li>
                    <li class="md:hidden">
                        <?php if (!isset($_SESSION['cid'])) { ?>
                            <a href="./client/login.php"
                                class="block py-2 pl-3 pr-4 text-slate-900 rounded hover:bg-green-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-green-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-green-700">Login</a>
                        <?php } else { ?>
                            <a href="./client/logout.php"
                                class="block py-2 pl-3 pr-4 text-slate-900 rounded hover:bg-green-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-green-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-green-700"
                                onclick="return confirm('Are you sure?')">Logout</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
            <a href="services.php">Services</a>
            <a href="aboutus.php">About</a>
            <a href="orders.php">Orders</a>
            <a href="./cart.php" class="p-2  text-white rounded relative" aria-current="page">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                </svg>
                <?php
                $connect = mysqli_connect("localhost", "root", "", "project");
                $query = "SELECT COUNT(*) AS item_count
                FROM products 
                INNER JOIN cart ON products.id = cart.product_id 
                WHERE cart.client_id = ? 
                ORDER BY cart.time_stamp DESC";
                $stmt = mysqli_prepare($connect, $query);

                mysqli_stmt_bind_param($stmt, "i", $_SESSION['cid']);

                mysqli_stmt_execute($stmt);

                $res = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($res);
                
                if (isset($_SESSION['cid']) && $row['item_count'] > 0) { ?>
                    <div
                        class="w-5 h-5 pb-0.5 text-sm rounded-full bg-red-500 absolute flex items-center justify-center top-0 right-0">
                        <?php echo $row['item_count'] ?>
                    </div>
                <?php } ?>

            </a>
            <?php
            if (!isset($_SESSION['cid'])) { ?>
                <a href="#" class="p-2  text-white rounded" aria-current="page" data-modal-target="popup-modal"
                    data-modal-toggle="popup-modal">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 15">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 7.5h11m0 0L8 3.786M12 7.5l-4 3.714M12 1h3c.53 0 1.04.196 1.414.544.375.348.586.82.586 1.313v9.286c0 .492-.21.965-.586 1.313A2.081 2.081 0 0 1 15 14h-3" />
                    </svg>
                </a>
            <?php } else { ?>
                <a href="./client/logout.php" class="p-2  text-white rounded" onclick="return confirm('Are you sure?')">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 16 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
                    </svg>
                </a>
            <?php } ?>
            <!-- signup modal -->
            <div data-modal-target="popup-modal" id="popup-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-green-700">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-slate-400 bg-transparent hover:bg-green-200 hover:text-slate-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-white"
                            data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <svg class="w-[40px] h-[40px] text-slate-500 mx-auto my-5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.2"
                                    d="M8 9h2v5m-2 0h4M9.408 5.5h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-slate-500 dark:text-slate-400">Choose Your Account
                                Type.</h3>
                            <a href="./client/login.php"><button data-modal-hide="popup-modal" type="button"
                                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Client
                                </button> </a>
                            <a href="./admin/form.php"><button data-modal-hide="popup-modal" type="button"
                                    class="text-slate-500 bg-white hover:bg-green-100 focus:ring-4 focus:outline-none focus:ring-green-200 rounded-lg border border-green-200 text-sm font-medium px-5 py-2.5 hover:text-slate-900 focus:z-10 dark:bg-green-700 dark:text-slate-300 dark:border-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-600">Admin</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- drop down menu  -->
    <div id="mega-menu-full-dropdown"
        class="hidden mt-1 border-green-200 shadow-sm bg-green-50 md:bg-white border-y dark:bg-green-800 dark:border-green-600">
        <div
            class="grid max-w-screen-xl px-4 py-5 mx-auto text-slate-900 darkProductspro:text-white sm:grid-cols-2 md:px-6">
            <ul>
                <li>
                    <a href="http://localhost/Sundarban-Development/products.php" class="block p-3 rounded-lg hover:bg-green-100 dark:hover:bg-green-700">
                        <div class="font-semibold">All</div>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/Sundarban-Development/products.php?category=ghee" class="block p-3 rounded-lg hover:bg-green-100 dark:hover:bg-green-700">
                        <div class="font-semibold">Honey</div>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/Sundarban-Development/products.php?category=ghee" class="block p-3 rounded-lg hover:bg-green-100 dark:hover:bg-green-700">
                        <div class="font-semibold">Ghee</div>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="http://localhost/Sundarban-Development/products.php?category=dairy" class="block p-3 rounded-lg hover:bg-green-100 dark:hover:bg-green-700">
                        <div class="font-semibold">Milk & Milk Products</div>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/Sundarban-Development/products.php?category=sweet" class="block p-3 rounded-lg hover:bg-green-100 dark:hover:bg-green-700">
                        <div class="font-semibold">Sweets</div>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/Sundarban-Development/products.php?category=snacks" class="block p-3 rounded-lg hover:bg-green-100 dark:hover:bg-green-700">
                        <div class="font-semibold">Snacks</div>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="http://localhost/Sundarban-Development/products.php?category=crops" class="block p-3 rounded-lg hover:bg-green-100 dark:hover:bg-green-700">
                        <div class="font-semibold">Rice & Dal</div>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Connect with third-party tools that
                            you're already using.</span>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>