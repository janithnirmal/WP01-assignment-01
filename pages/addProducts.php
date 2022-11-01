<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New Tech</title>
    <link rel="icon" href="../resources/logo/icon.svg" />

    <!-- css files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>

    <!-- nav bar -->
    <header class="profile-header">
        <!-- navbar -->
        <div class="col12 h-100">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-3 ">
                        <a href="home.php">
                            <div class="back-to-home fs-4 fw-bold"><i class="bi bi-arrow-left"></i> To Your Products</div>
                        </a>
                    </div>

                    <div class="col-6 fw-bold fs-3 text-center">Add a Product to Your Store</div>

                    <div class="col-3 d-flex align-items-center ">
                        <!-- purches details -->
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="cart.php"><i class="bi bi-cart2 text-white" style="font-size: 22px;"></i></a>
                            <i class="bi ms-1 bi-record-fill text-white" style="font-size: 8px;"></i>
                            <a href="profile.php"><i class="bi ms-1 bi-person-circle text-white" style="font-size: 22px;"></i></a>
                            <i class="bi ms-1 bi-record-fill text-white d-md-flex me-1 d-none" style="font-size: 8px;"></i>
                        </div>

                        <!-- user details / log in details -->
                        <div class="profile-details flex-column ms-1 d-md-flex d-none border-start border-2 ps-2">
                            <span class="fw-bold text-white" style="font-size: 13px;">Janith Nirmal</span>
                            <span class="text-white" style="font-size: 13px;">rmjanithnirmal@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- content -->





    <!-- footer -->
    <?php include("footer.php"); ?>

    <script src="../scripts/bootstrap.bundle.js"></script>
    <script src="../scripts/scripts.js"></script>
</body>

</html>