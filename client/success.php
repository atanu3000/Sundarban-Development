<?php
session_start();
if (!isset($_SESSION['cid'])) {
    header('Location: ../index.php');
} else {
    $clientId = $_SESSION['cid'];
}

?>

<!DOCTYPE html>
<html lang="en">
<?php $title = " About"; ?>
<?php include("../partials/head.php"); ?>

<body class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="flex flex-col justify-center items-center bg-white rounded-xl py-14 px-20">
        <img width="94" height="94" src="https://img.icons8.com/3d-fluency/94/confetti.png" alt="confetti" />
        <h3 class="text-4xl font-semibold text-gray-600 w-full text-center mt-6">Congratulation</h3>
        <p class="text-green-600 text-xl text-center mt-4">Payment process complete</p>
        <?php if(isset($_SESSION['payment_id'])) { ?>
            <p class="text-gray-500 text-sm mt-3 py-2 px-5 bg-gray-100 rounded-full">Payment ID: &nbsp;<?php echo $_SESSION['payment_id'] ?></p>
        <?php } ?>
        <a href="../index.php" class="flex items-center gap-4 bg-green-900 text-white px-6 py-3 mt-10 rounded-xl">
            <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            Go Back
        </a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>