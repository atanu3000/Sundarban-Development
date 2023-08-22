<?php 
session_start();

if($_SESSION['adminid']=="" || !isset($_SESSION['adminid'])) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php")?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">   
        <?php include("include/sidebar.php") ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include("include/nav.php")?>
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include("include/footer.php")?>          
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

</body>
</html>