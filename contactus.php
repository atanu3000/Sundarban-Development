<?php
session_start();
include('./client/config/mail-config.php'); // includeing config of PHPmailer
if(!isset($_SESSION['cid'])) {
    header('location: client/login.php');
}
$mail->isSMTP();
$mail->addAddress($_SESSION['email']);
$mail->Subject = 'Thankyou for contacting';
$mail->Body = "
<div style='background-color: #e7fff5;  font-family: Arial, sans-serif; '>
    <div style='width: 100%; height: 80px; padding: 10px 0; background: #0a472e'>
        <h2 style='color: #fedb5e; text-align: center; margin-bottom: 5px;'>Welcome to Sundarini</h2>
        <h4 style='color: #fedb5e; text-align: center; margin-top: 3px; font-weight: 300'>100% Natural Products</h4>
    </div>
    <div style='padding: 20px 10px 60px 10px;'>
        <img style='display: block; margin: 0 auto' width='88' height='88'
            src='https://img.icons8.com/external-sbts2018-solid-sbts2018/58/40C057/external-thank-you-basic-ui-elements-2.3-sbts2018-solid-sbts2018.png'
            alt='external-thank-you-basic-ui-elements-2.3-sbts2018-solid-sbts2018' />
        <h3 style='color: #0a472e; '>
            Hey " . $_SESSION['name'] . ",
        </h3>
        <h5 style='font-size: 1.2em; color: #0b4f32; font-weight: 300; margin: 15px 0;'>
            Thanks for getting in touch! Your message matters to us, and we'll respond promptly. For more questions or requests, please feel free to ask. We value your interest!
        </h5>
    </div>
    <div style=' background-color: #d3f8e9; padding: 10px 0;'>
        <p style='text-align: center; font-size: 1.2em; color: #0b4f32; font-weight: 300'>Thank You</p>
        <p style='text-align: center; font-size: 1em; color: #0b4f32; font-weight: 600'>&copy; 2023 Sundarini, All
            right reserved.</p>
    </div>
</div>";
if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    if (strlen(trim($_POST['message'])) > 0) {
        $mail->send();
        header('Location: ' . $_SERVER['REQUEST_URI']);
    } else {
        $error = "Write your message first!";
    }    
} 
?>
<!DOCTYPE html>
<html lang="en">
<?php $title = " Contact Us"; ?>
<?php include("./partials/head.php"); ?>

<body>
    <?php include("./partials/navbar.php") ?>
    <div class="bg-[#0a472e] w-full pt-20">
        <div class="relative flex md:w-[65vw] px-10 md:p-0 mx-auto justify-between gap-20">
            <div class="flex flex-col gap-5 pb-32 max-w-[500px] pl-5">
                <h1 class="text-6xl text-green-200 font-semibold">Contact Us</h1>
                <p class="text-xl text-white font-extralight">
                    "Got questions or suggestions? We're here to help with all your agricultural needs. Feel free to
                    contact us anytime, and we'll respond promptly. Your feedback matters to us!"
                </p>
            </div>
            <div class="relative w-[450px]">
                <img src="asset/farmer.png" class="absolute top-[-80px] pl-10 h-[400px]" src="" alt="photo">
            </div>
        </div>
    </div>
    <div class="relative min-h-[70vh]  flex items-center justify-center ">
        <div class="absolute flex flex-col gap-10 bg-white top-[-95px]  w-[65vw] mx-auto min-h-[500px] py-7 ">
            <div class="flex justify-between px-5">
                <div
                    class="bg-green-50 w-[47%] shadow-xl py-10 hover:scale-105 hover:shadow-2xl transition duration-300 ease-in-out">
                    <div class="flex gap-5 items-center w-max mx-auto">
                        <img width="48" height="48"
                            src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/40C057/external-phone-networking-tanah-basah-glyph-tanah-basah.png"
                            alt="external-phone-networking-tanah-basah-glyph-tanah-basah" />
                        <div class="flex flex-col gap-3">
                            <p class="text-xl text-gray-500">Call us directly at</p>
                            <p class="text-2xl text-green-800 font-bold">
                                +91 70444 17695
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-green-50 w-[47%] shadow-xl py-10 hover:scale-105 hover:shadow-2xl transition duration-300 ease-in-out">
                    <div class="flex gap-5 items-center w-max mx-auto">
                        <img width="64" height="64" src="https://img.icons8.com/pastel-glyph/64/40C057/whatsapp--v2.png"
                            alt="whatsapp--v2" />
                        <div class="flex flex-col gap-5">
                            <p class="text-xl text-gray-500">Send with our Sales Team </p>
                            <a href="whatsapp://send?phone=+919635416478&text=Hello%20👋,%20I%20am%20<?php echo $_SESSION["name"] ?>"
                                class="px-6 py-3 bg-green-800 text-white text-lg">Chat on WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="bg-green-50 py-10 px-5 shadow-xl mx-5 hover:scale-105 hover:shadow-2xl transition duration-300 ease-in-out">
                <form method="post">
                    <div class="mb-6 flex flex-col gap-5">
                        <label for="message" class="text-xl text-gray-500">Send your feedback</label>
                        <div class="relative">
                            <textarea name="message" id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 resize-none"
                                required placeholder="Leave a comment..."></textarea>
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <?php if (isset($error)) { ?>
                                    <span class="font-medium">Oops!</span>
                                    <?php echo $error;
                                } ?>
                            </p>
                        </div>
                    </div>
                    <button type="submit" class="px-6 py-3 bg-green-800 text-white text-lg">Submit
                        Your Message</button>
                </form>
            </div>
        </div>
    </div>

    <?php include("./partials/footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>