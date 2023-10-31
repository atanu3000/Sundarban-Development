<!DOCTYPE html>
<html lang="en">
<?php $title = " Home"; ?>
<?php include("../partials/head.php"); ?>

<body class="min-h-screen flex items-center bg-gray-100">
    <div class="flex content-stretch w-full justify-center h-[500px]">
        <div class="bg-[#0a472e] w-72 px-5 py-10 flex flex-col justify-between h-full">
            <div>
                <h2 class="text-white text-2xl font-semibold">
                    Welcome back !
                </h2>
                <p class="text-white mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Illum, voluptatum.
                </p>
            </div>
            <!-- <img src="../asset/poster.webp" style="border-radius: 60% 40% 61% 39% / 56% 52% 48% 44%  " alt="" class="w-[200px] mx-auto"> -->
            <img src="../asset/logo (5).png" alt="" class="w-[200px] mx-auto">
        </div>
        <form class="sm:w-96 bg-white p-5 py-10 h-full" method="POST" action="login_db.php">
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    email</label>
                <input type="email" id="email" name="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="user@gmail.com" required />
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    password</label>
                <input type="password" id="password" name="pass"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="password" required />
            </div>
            <p class="my-4">
                Do you have not any account?
                <a href="./register.php" class="text-blue-600">Create Account</a>
            </p>
            <button type="submit"
                class="text-white bg-[#0a472e] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Login
            </button>
            <button type="button"
                class="md:hidden ml-5 text-white bg-[#0a472e] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                onclick="window.location = '../admin/form.php'">
                Login as Admin
            </button>
        </form>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>