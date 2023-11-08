<?php
session_start();
if(isset($_SESSION['cid'])){
    header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<?php $title = " Register"; ?>
<?php include("../partials/head.php"); ?>

<body class="min-h-screen flex items-center bg-gray-100">
    <div class="flex content-stretch w-full justify-center min-h-[500px]">
        <div class="bg-[#0a472e] slef-stretch w-80 px-5 py-10 flex flex-col justify-between">
            <div>
                <h2 class="text-white text-2xl font-semibold">
                    Do Register !
                </h2>
                <p class="text-white mt-5">
                "Welcome! Create your account to unlock exclusive benefits and join our community. Let's get started with your registration."
                </p>
            </div>
            <img src="../asset/logo (3).png" alt="" class="w-[200px] mx-auto">
        </div>
        <form class="sm:w-96 bg-white h-full p-5 py-10 " method="POST" action="register_db.php">
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
            <input type="text" id="name" name="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="Enter your full name" required>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" id="email" name="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="name@flowbite.com" required>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                password</label>
            <input type="password" id="password" name="pass"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="password"
                required>
        </div>
        <div class="mb-6">
            <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat
                password</label>
            <input type="password" id="repeat-password" name="c-pass"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="confirm password"
                required>
        </div>
        <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
                <input id="terms" type="checkbox" value=""
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                    required>
            </div>
            <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a
                    href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
        </div>
        <p class="my-4">Do you have already an account? <a href="./login.php" class="text-blue-600">login</a></p>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
            new account</button>
    </form>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>