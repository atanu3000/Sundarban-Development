<?php
session_start();
if (isset($_GET['id']) && !isset($_SESSION['cid'])) {

    include('config/mail-config.php'); // includeing config of PHPmailer

    $id = $_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $otp = $_SESSION['otp'];
        $name = $_SESSION['name'];
        $inputOtp = '';
        for ($i = 1; $i <= 6; $i++) {
            $inputOtp .= $_POST['otp' . $i];
        }
        if ($inputOtp == $otp) {
            $_SESSION['cid'] = $id;

            $mail->isSMTP();
            $mail->addAddress($_SESSION['email']);
            $mail->Subject = 'Welcome to Sundarini';
            $mail->Body = "
            <div style='background-color: #e7fff5;  font-family: Arial, sans-serif; '>
                <div style='width: 100%; height: 80px; padding: 10px 0; background: #0a472e'>
                    <h2 style='color: #fedb5e; text-align: center; margin-bottom: 5px;'>Welcome to Sundarini</h2>
                    <h4 style='color: #fedb5e; text-align: center; margin-top: 3px; font-weight: 300'>100% Natural Products</h4>
                </div>
                <div style='padding: 10px 10px 50px 10px;'>
                    <img style='display: block; margin: 0 auto' width='88' height='88'
                        src='https://img.icons8.com/external-sbts2018-solid-sbts2018/58/40C057/external-thank-you-basic-ui-elements-2.3-sbts2018-solid-sbts2018.png'
                        alt='external-thank-you-basic-ui-elements-2.3-sbts2018-solid-sbts2018' />
                    <h3 style='color: #0a472e; '>Hey "
                . $_SESSION['name'] . ",
                    </h3>
                    <h5 style='font-size: 1.2em; color: #0b4f32; font-weight: 300; margin: 15px 0;'>Welcome to Sundarini! We're
                        excited to have you as a member of our community.</h5>
                    <h5 style='font-size: 1.2em; color: #0b4f32; font-weight: 300; margin: 15px 0;'>Thank you for choosing us
                        for your daily needs. <br>Explore a wide range of products, enjoy secure shopping and fast shipping.
                        We're here to assist you anytime.</h5>
                    <h5 style='text-align: center; font-size: 1.2em; color: #0b4f32; font-weight: 300; margin: 15px 0;'>Happy
                        shopping!</h5>
                    <p style='font-size: 1.2em; color: #0b4f32; font-weight: 300; margin: 40px 0 5px 0;'>Best regards,</p>
                    <p style='font-size: 1.2em; color: #0b4f32; font-weight: 300; margin: 5px 0;'>Our Team</p>
                    <p style='font-size: 1.2em; color: #0b4f32; color: #0a472e; font-weight: 600; margin: 5px 0;'>Sundarini</p>
                </div>
                <div style=' background-color: #d3f8e9; padding: 10px 0;'>
                    <p style='text-align: center; font-size: 1.2em; color: #0b4f32; font-weight: 300'>Thank You</p>
                    <p style='text-align: center; font-size: 1em; color: #0b4f32; font-weight: 600'>&copy; 2023 Sundarini, All
                        right reserved.</p>
                </div>
            </div>";
            $mail->send();

            unset($_SESSION['otp']);
            header('location: ../index.php');
        } else {
            $msg = 'Incorrect OTP!';
        }
    }

} else {
    header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang='en'>
<?php $title = 'Verification'; ?>
<?php include('../partials/head.php'); ?>

<body class='min-h-screen flex flex-col py-20 items-center bg-gray-100'>
    <?php if (isset($msg)) { ?>
        <div id='alert-2'
            class='absolute top-10 flex items-center p-4 mb-10 text-red-800 rounded-lg bg-red-50 border border-red-500'
            role='alert'>
            <svg class='flex-shrink-0 w-4 h-4' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor'
                viewBox='0 0 20 20'>
                <path
                    d='M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z' />
            </svg>
            <span class='sr-only'>Info</span>
            <div class='ml-3 text-sm font-medium'>
                <?php echo $msg; ?>
            </div>
            <button type='button'
                class='ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700'
                data-dismiss-target='#alert-2' aria-label='Close'>
                <span class='sr-only'>Close</span>
                <svg class='w-3 h-3' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 14 14'>
                    <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'
                        d='m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6' />
                </svg>
            </button>
        </div>
    <?php } ?>
    <div class='bg-white p-10 mt-14 md:w-1/2'>
        <div class='flex flex-col gap-6 items-center'>
            <div class='bg-green-800 rounded-full p-4'>
                <svg class='w-6 h-6 text-white' aria-hidden='true' xmlns='http://www.w3.org/2000/svg'
                    fill='currentColor' viewBox='0 0 18 20'>
                    <path
                        d='m17.351 3.063-8-3a1.009 1.009 0 0 0-.7 0l-8 3A1 1 0 0 0 0 4a19.394 19.394 0 0 0 8.47 15.848 1 1 0 0 0 1.06 0A19.394 19.394 0 0 0 18 4a1 1 0 0 0-.649-.937Zm-3.644 4.644-5 5A1 1 0 0 1 8 13c-.033 0-.065 0-.1-.005a1 1 0 0 1-.733-.44l-2-3a1 1 0 0 1 1.664-1.11l1.323 1.986 4.138-4.138a1 1 0 0 1 1.414 1.414h.001Z' />
                </svg>
            </div>
            <div>
                <h1 class='text-3xl text-center font-bold text-green-800'>
                    OTP Verification
                </h1>
                <p class='text-gray-400 mt-2'>Enter 6 digit verification code on your Email ID</p>
            </div>
            <form method='POST' class='flex flex-col gap-8 mt-5'>
                <div class='flex gap-2'>
                    <input type='text' maxlength='1' oninput='focusNext(this)' name='otp1'
                        class='flex justify-center lg:p-5 p-4 lg:pl-8 pl-[26px] bg-green-50 border-none w-16 lg:w-20 text-xl focus:ring-green-500 focus:border-green-500'
                        placeholder='0'>
                    <input type='text' maxlength='1' oninput='focusNext(this)' name='otp2'
                        class='flex justify-center lg:p-5 p-4 lg:pl-8 pl-[26px] bg-green-50 border-none w-16 lg:w-20 text-xl focus:ring-green-500 focus:border-green-500'
                        placeholder='0'>
                    <input type='text' maxlength='1' oninput='focusNext(this)' name='otp3'
                        class='flex justify-center lg:p-5 p-4 lg:pl-8 pl-[26px] bg-green-50 border-none w-16 lg:w-20 text-xl focus:ring-green-500 focus:border-green-500'
                        placeholder='0'>
                    <input type='text' maxlength='1' oninput='focusNext(this)' name='otp4'
                        class='flex justify-center lg:p-5 p-4 lg:pl-8 pl-[26px] bg-green-50 border-none w-16 lg:w-20 text-xl focus:ring-green-500 focus:border-green-500'
                        placeholder='0'>
                    <input type='text' maxlength='1' oninput='focusNext(this)' name='otp5'
                        class='flex justify-center lg:p-5 p-4 lg:pl-8 pl-[26px] bg-green-50 border-none w-16 lg:w-20 text-xl focus:ring-green-500 focus:border-green-500'
                        placeholder='0'>
                    <input type='text' maxlength='1' oninput='focusNext(this)' name='otp6'
                        class='flex justify-center lg:p-5 p-4 lg:pl-8 pl-[26px] bg-green-50 border-none w-16 lg:w-20 text-xl focus:ring-green-500 focus:border-green-500'
                        placeholder='0'>
                </div>
                <button type='submit'
                    class='px-10 py-3 text-white text-xl bg-green-800 w-max mx-auto hover:bg-green-700'>Verify
                    OTP</button>
            </form>
        </div>
    </div>

    <script src='https://cdn.tailwindcss.com'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js'></script>
    <script>
        function focusNext(currentInput) {
            const allInputs = document.querySelectorAll("input[type='text']");
            const currentIndex = Array.from(allInputs).indexOf(currentInput);

            if (currentIndex < allInputs.length - 1) {
                allInputs[currentIndex + 1].focus();
            }
        }
    </script>
</body>

</html>