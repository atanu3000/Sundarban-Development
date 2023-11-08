<?php
session_start();
if (isset($_SESSION['cid'])) {
    header('location: ../index.php');
}

// require 'mail-config.php';
include('config/mail-config.php');

$connection = mysqli_connect("localhost", "root", "", "project");

extract($_POST);
if (isset($_POST["email"]) && isset($_POST["pass"])) {
    $query = "SELECT * FROM client_db WHERE email='$email' AND pass='$pass'";

    $res = $connection->query($query);
    if ($res->num_rows > 0) {
        $user = mysqli_fetch_assoc($res);
        $id = $user["id"];
        $_SESSION['otp'] = rand(100000, 999999);
        $_SESSION['name'] = $user["name"];
        $_SESSION['email'] = $_POST['email'];

        $mail->isSMTP();
        $mail->addAddress($_SESSION['email']);
        $mail->Subject = 'OTP Authentication';
        $mail->Body = '
            <div style="background-color: #e7fff5;  font-family: Arial, sans-serif; ">
                <div
                    style="width: 100%; height: 80px; padding: 10px 0; background: #0a472e">
                    <h1 style="color: #fedb5e; text-align: center;">Sundarini</h1>
                </div>
                <div style="padding: 50px 0 70px 0;">
                    <h3 style="text-align: center; color: #007bff;">OTP Authentication</h3>
                    <div style="text-align: center; align-items: center">
                        <p style="font-size: 16px;">Use your OTP</p>
                        <p style="font-size: 20px; font-weight: 600; background: #e7fff5; outline: none; border: none" id="OTP">
                            ' . $_SESSION['otp'] . '</p>
                        <p style="font-size: 12px;">DO NOT SHARE this code wih anyone else.</p>

                    </div>
                </div>
                <div style=" background-color: #d3f8e9; padding: 10px 0;">
                    <p style="text-align: center; font-size: 1.2em; color: #0b4f32; font-weight: 300">Thank You</p>
                    <p style="text-align: center; font-size: 1em; color: #0b4f32; font-weight: 600">&copy; 2023 Sundarini, All
                        right reserved.</p>
                </div>
            </div>';
        if(!$mail->send()){
            $msg = "Enter valid Email ID";
        }

        header("location: checkotp.php?id=" . $id);
    } else {
        $msg = "Enter Valid Credentials!";
    }
} ?>

<!DOCTYPE html>
<html lang="en">
<?php $title = " Login"; ?>
<?php include("../partials/head.php"); ?>

<body class="min-h-screen flex flex-col py-20 items-center bg-gray-100">
    <?php if (isset($msg)) { ?>
        <div id="alert-2"
            class="absolute top-10 flex items-center p-4 mb-10 text-red-800 rounded-lg bg-red-50 border border-red-500"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                <?php echo $msg; ?>
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    <?php } ?>
    <div class="flex content-stretch w-full justify-center h-[500px] mt-14">
        <div class="bg-[#0a472e] w-72 px-5 py-10 flex flex-col justify-between h-full">
            <div>
                <h2 class="text-white text-2xl font-semibold">
                    Welcome back !
                </h2>
                <p class="text-white mt-5">
                    "Welcome back! Please enter your credentials to access your account and enjoy our services."
                </p>
            </div>
            <img src="../asset/logo (5).png" alt="" class="w-[200px] mx-auto">
        </div>
        <form class="sm:w-96 bg-white p-5 py-10 h-full" method="POST">
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