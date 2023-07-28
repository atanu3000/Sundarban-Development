<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php") ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include("include/sidebar.php") ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include("include/nav.php") ?>

                <!-- Search Products -->
                <div class="product_search mx-auto text-right px-5">
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search shadow-lg border border-5"
                        action="search_products.php" method="post">
                        <div class="input-group">
                            <input name="search_item" type="text" class="form-control bg-white border-0 small px-4"
                                placeholder="Search for Products..." aria-label="Search"
                                aria-describedby="basic-addon2" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <!-- <i class="fas fa-search fa-sm"></i> -->
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <?php include("include/list.php") ?>
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include("include/footer.php") ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

</body>

</html>