<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php $title = " Contact Us"; ?>
<?php include("./partials/head.php"); ?>

<body>
    <?php include("./partials/navbar.php") ?>
    <div class="bg-[#0a472e] w-full pt-20">
        <div class="relative flex md:w-[65vw] px-10 md:p-0 mx-auto justify-between gap-20">
            <div class="flex flex-col gap-5 pb-44 max-w-[500px] pl-5">
                <h1 class="text-6xl text-green-200 font-semibold">Contact Us</h1>
                <p class="text-xl text-white font-extralight">
                "Got questions or suggestions? We're here to help with all your agricultural needs. Feel free to contact us anytime, and we'll respond promptly. Your feedback matters to us!"
                </p>
            </div>
            <div class="relative w-[450px]">
                <img src="asset/farmer.png" class="absolute top-[-80px] pl-10 h-[400px]" src="" alt="photo">
            </div>
        </div>
    </div>
    <div class="relative min-h-[70vh] bg-gray-100 flex items-center justify-center ">
        <div class="absolute top-[-140px] bg-white w-[65vw] mx-auto min-h-[500px] p-10 shadow-xl">
            <form>
                <div class="mb-6">
                    <label for="user-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        Name</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                            </svg>
                        </div>
                        <input type="text" id="user-name" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="John Doe">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="email-address-icon"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path
                                    d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                <path
                                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                            </svg>
                        </div>
                        <input type="email" id="email-address-icon" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="name@flowbite.com">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="mobile-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        Mobile Number</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                <path
                                    d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                            </svg>
                        </div>
                        <input type="text" id="mobile-number" name="number" placeholder="Enter Mobile Number"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="name@flowbite.com">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        Message</label>
                    <div class="relative">
                        <textarea id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 resize-none"
                            placeholder="Leave a comment..."></textarea>
                    </div>
                </div>
                <button type="submit"
                    class="text-white bg-[#0a472e] hover:bg-green-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit Your Message</button>
            </form>

        </div>
    </div>

    <?php include("./partials/footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>