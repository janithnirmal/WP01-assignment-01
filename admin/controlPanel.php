<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New Tech | Admin Control Panel</title>
    <link rel="icon" href="../resources/logo/icon.svg" />

    <!-- css files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>

    <!-- nav bar -->
    <?php include("app/adminNavbar.php"); ?>

    <section>
        <div class="container">
            <div class="col-12">
                <div class="row d-flex justify-content-center mt-2">
                    <a style="width: 250px;" class="pt-1 c-btn fw-bold text-center" href="../index.php">Go TO WebPage</a>
                </div>
            </div>
        </div>
    </section>


    <!-- mini nav bar -->
    <section>
        <div class="container py-2">
            <div class="col-12 mt-2">
                <div class="row fw-bold text-center">
                    <div class="col-4">
                        <div class="row mx-2 d-flex " onclick="window.location='controlPanel.php' ">
                            <span class="c-btn pt-1">Dash Board</span>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="row mx-2 d-flex" onclick="window.location='productManagement.php' ">
                            <span class="c-btn pt-1">Product Management</span>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="row mx-2 d-flex" onclick="window.location='userManagement.php' ">
                            <span class="c-btn pt-1">User Management</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <hr>

            </div>
        </div>
    </section>



    <!-- content -->
    <section>
        <div class="container">
            <div class="col-12">
                <div class="row px-2 d-flex  justify-content-center">
                    <div class="col-md-4 col-12">
                        <div class="card text-bg-dark mb-3">
                            <div class="card-header">User Count</div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-2">3500</h5>
                                <p class="card-text fw-normal fs-6">Total count of the users in the platform along with sellers and buyers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 h-100">
                        <div class="card text-bg-success mb-3">
                            <div class="card-header">Total sellings</div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-2">34000</h5>
                                <p class="card-text fw-normal fs-6">Count of all successfull sales from each seller from the start</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="card text-bg-dark mb-3">
                            <div class="card-header">Total Engagement</div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-2">67000</h5>
                                <p class="card-text fw-normal fs-6">Total website traffics from new visitors all around the world</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12 h-100">
                        <div class="card text-bg-success mb-3">
                            <div class="card-header">Monthly Sellings</div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-2">4000</h5>
                                <p class="card-text fw-normal fs-6">Count of sellings per this month from each order</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card text-bg-dark mb-3">
                            <div class="card-header">monthly best selling item</div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-2">#23h342</h5>
                                <p class="card-text fw-normal fs-6">Chromecast generation 3 <br> &nbsp;</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12 h-100">
                        <div class="card text-bg-success mb-3">
                            <div class="card-header">Daily User Engagement</div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-2">175</h5>
                                <p class="card-text fw-normal fs-6">Amount of the users who visit the page and place an order with 24 HOURS</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 my-2">
                        <hr />
                    </div>

                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-12 text-center fs-3 p-3 fw-bold text-light bg-dark">Server Up Time</div>
                            <span style="border: 3px black solid;" class="text-success fw-bold fs-3 text-center"> 1Y 200D 20H 25M 30S</span>
                        </div>
                    </div>

                    <div class="col-12 my-2">
                        <hr />
                    </div>

                    <div class="col-12">
                        <div class="row d-flex justify-content-center">
                            <div class="card mx-3" style="width: 18rem;">
                                <img src="../resources/images/profile.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text fw-bold fs-3">Best Seller of the Month</p>
                                    <p class="card-text fs-5">Kasun Madushan</p>
                                    <p class="card-text fs-5 text-danger">User Id : #hj43jh23</p>
                                </div>
                            </div>

                            <div class="card mx-3" style="width: 18rem;">
                                <img src="../resources/images/profile.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text fs-3 fw-bold">Best buyer of the Month</p>
                                    <p class="card-text fs-5 ">Janith Nirmal</p>
                                    <p class="card-text fs-5 text-danger">User Id : #dsg342j</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-2">
                        <hr />
                    </div>

                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Overall Earnings</div>
                                
                            </div>
                            <span class="badge bg-primary rounded-pill">$3123000 .00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Monthly Earnings</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">$229123 .00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">AVG. daily earnings</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">$70000 .00</span>
                        </li>
                    </ol>

                    <div class="col-12 my-2">
                        <hr />
                    </div>

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