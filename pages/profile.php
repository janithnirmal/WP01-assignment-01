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
                            <div class="back-to-home fs-4 fw-bold"><i class="bi bi-arrow-left"></i> To Home</div>
                        </a>
                    </div>

                    <div class="col-6 fw-bold fs-3 text-center">Your Profile</div>

                    <div class="col-3 d-flex align-items-center ">
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
    <section>
        <div class="col-12">
            <div class="container">
                <div class="row p-3 d-flex justify-content-between">

                    <div class="col-12 col-lg-4">
                        <div class="col-12 profile-box profileContentBox">
                            <div class="col-12 mt-4 d-flex justify-content-center">
                                <div class="profile-picture"></div>
                            </div>

                            <div class="row px-5 mt-3 justify-content-center align-items-center col-12">
                                <div class="col">
                                    <button class="fw-bold c-btn" style="background-color: white; color: rgb(248, 56, 56);">Change Profile Image</button>
                                </div>
                            </div>

                            <div class="col-12 px-3">
                                <hr class="border-dark border" />
                            </div>


                            <!-- profile details -->
                            <div class="col-12 mt-3 mx-3">
                                <div class="row">
                                    <div class="fw-bold fs-6 text-light">Name : <span class="fw-light">Janith Nirmal</span></div>
                                </div>
                            </div>

                            <div class="col-12 mt-3 mx-3">
                                <div class="row">
                                    <div class="fw-bold fs-6 text-light">Email : <span class="fw-light">rmjanithnirmal@gmail.com</span></div>
                                </div>
                            </div>

                            <div class="col-12 mt-3 mx-3">
                                <div class="row">
                                    <div class="fw-bold fs-6 text-light">Mobile : <span class="fw-light">+94 71 090 2997</span></div>
                                </div>
                            </div>

                            <div class="col-12 mt-3 mx-3">
                                <div class="row">
                                    <div class="fw-bold fs-6 text-light">Gender : <span class="fw-light">Male</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8">
                        <div class="col-12  profile-container profileContentBox">
                            <div class="container px-3">
                                <div class="col-12">
                                    <div class="row pt-3 d-flex justify-content-center fs-3 fw-bold">Edit Your Profile</div>
                                </div>

                                <div class="col-12 px-2">
                                    <hr />
                                </div>

                                <div class="row px-2">
                                    <div class="col">
                                        <label class="form-label">First name</label>
                                        <input type="text" class="c-inputs" placeholder="First name">
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Last name</label>
                                        <input type="text" class="c-inputs" placeholder="Last name">
                                    </div>
                                </div>



                                <div class="row px-2 mt-2">
                                    <div class="col">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="c-inputs" value="rmjanithnirmal@gmail.com" disabled>
                                    </div>
                                </div>

                                <div class="row px-2 mt-2">
                                    <div class="col">
                                        <label class="form-label">Address : </label>
                                        <input type="text" class="c-inputs" value="No 150 groovey street, yourk ,USA">
                                    </div>
                                </div>

                                <div class="row px-2 mt-2">
                                    <div class="col">
                                        <label class="form-label">Gender : </label>
                                        <select class="c-inputs">
                                            <option disabled>Chose a gender</option>
                                            <option selected>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Mobile :</label>
                                        <input type="text" class="c-inputs" placeholder="Ex : +94710902997">
                                    </div>
                                </div>

                                <div class="row px-2 mt-2">
                                    <div class="col">
                                        <label class="form-label">Password</label>
                                        <input type="text" class="c-inputs" placeholder="********">
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Retype Password</label>
                                        <input type="text" class="c-inputs" placeholder="********">
                                    </div>
                                </div>

                                <div class="row px-2 mt-4">
                                    <div class="col">
                                        <button class="c-btn">Save</button>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <!-- footer -->
    <?php include("footer.php"); ?>

    <script src="../scripts/bootstrap.bundle.js"></script>
    <script src="../scripts/scripts.js"></script>
</body>

</html>