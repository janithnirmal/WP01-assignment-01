<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New Tech | Admin User Management</title>
    <link rel="icon" href="../resources/logo/icon.svg" />

    <!-- css files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body onload="productContentLoader();">

    <!-- nav bar -->
    <?php include("app/adminNavbar.php"); ?>




    <!-- mini nav bar -->
    <section>
        <div class="container py-2">
            <div class="col-12 mt-2">
                <div class="row fw-bold text-center">
                    <div class="col-4">
                        <div class="row mx-2 d-flex " onclick="window.location='controlPanel.php' ">
                            <span class="c-btn  pt-1" style="min-height: 40px; height: none;">Dash Board</span>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="row mx-2 d-flex" onclick="window.location='productManagement.php' ">
                            <span class="c-btn  pt-1" style="min-height: 40px; height: none;">Product Management</span>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="row mx-2 d-flex" onclick="window.location='userManagement.php' ">
                            <span class="c-btn  pt-1" style="min-height: 40px; height: none;">User Management</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <hr>

            </div>
        </div>
    </section>

    <!-- search bar -->
    <section>
        <div class="container search-container">
            <div class="col-12 h-100 px-3 pb-3">
                <div class="row h-100 align-items-center justify-content-center">
                    <input type="text" class="col-lg-6 col-10 search-bar" placeholder="Search your items here...">
                    <div class="col-2 search-button text-center pt-1"><i class="bi bi-search text-white fs-3"></i></div>
                </div>
            </div>

            <div class="col-12 mb-2">
                <hr />
            </div>
        </div>
    </section>

    <!-- content -->
    <section>
        <div class="container">
            <div class="col-12 my-2 px-2">
                <div class="row">
                    <div class="col-1 bg-dark">
                        <div class="row">
                            <span class="fw-bold text-center p-1 text-danger">Product ID</span>
                        </div>
                    </div>

                    <div class="col-6 col-md-5 bg-dark">
                        <div class="row">
                            <span class="fw-bold text-center p-1 text-light">Product Title</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-5  bg-dark">
                        <div class="row">
                            <span class="fw-bold text-center p-1 text-light">Seller</span>
                        </div>
                    </div>

                    <div class="d-none col-md-1 d-md-block bg-dark">
                        <div class="row">
                            <span class="fw-bold text-center p-1 text-danger">Amount</span>
                        </div>
                    </div>

                    <div class="d-none col-md-1 d-md-block bg-dark">
                        <div class="row">
                            <span class="fw-bold text-center p-1 text-danger">Availability</span>
                        </div>
                    </div>

                    <div class="d-none col-md-1 d-md-block bg-dark">
                        <div class="row">
                            <span class="fw-bold text-center p-1 text-danger">Status</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4">
                <div class="row px-3" style="overflow-y: scroll; height: 600px;" id="userContent">



                </div>
            </div>
        </div>
    </section>


    <!-- footer -->
    <?php include("../pages/footer.php"); ?>

    <script src="../scripts/bootstrap.bundle.js"></script>
    <script src="../scripts/scripts.js"></script>
</body>

</html>