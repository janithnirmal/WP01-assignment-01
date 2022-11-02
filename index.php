<!-- log in page -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New Tech | Log In</title>
    <link rel="icon" href="resources/logo/icon.svg" />

    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="sinIn-body">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center background">
            <div class="box col-10 col-lg-8 d-flex flex-column flex-lg-row" id="contenContainer">

                <!-- big logo image -->
                <div class="b1 col-12 col-lg-5 d-flex justify-content-center align-items-center ">
                    <img src="resources/logo/full-logo-white.svg" class="large-logo" id="largeLogo" />
                </div>

                <div class="b2 col-12 col-lg-7 d-flex align-items-center justify-content-center flex-lg-row" id="inputContainer">

                    <!-- sign up -->
                    <div class="row p-4 d-flex d-none align-content-center justify-content-center" id="inputFeild1">

                        <div class="col-12">
                            <label class="col-12 form-label text-center fw-bold fs-4">Sign Up</label>
                        </div>
                        <div class="col-12 col-lg-6 mt-2">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-12 col-lg-6 mt-2">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-12">
                            <label class="form-label">Mobile</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-12">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-12 ">
                            <label class="form-label">Gender</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected disabled>Select your gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 mt-3">
                            <button class="mt-2 col-12 btn btn-primary" onclick="location.href = 'pages/home.php';">Sign Up</button>
                        </div>
                        <div class="col-12 col-lg-6 mt-3    ">
                            <button class="mt-2 col-12 btn btn-secondary" onclick="pageChnager();">Sign In</button>
                        </div>
                    </div>

                    <!-- sign in -->
                    <div class="row  p-4 mt-3 h-50" id="inputFeild2">
                        <div class="col-12">
                            <label class="col-12 form-label text-center fw-bold fs-4">Sign In</label>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-12">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-12 col-lg-6 mt-3">
                            <input class=" form-check-input" type="checkbox" aria-label="Checkbox for following text input">
                            <label class=" form-label">Remember me</label>
                        </div>
                        <div class="col-12 col-lg-6 d-flex justify-content-end">
                            <a class="mt-3" href="#">Forgot password?</a>
                        </div>
                        <div class="col-12 col-lg-6">
                            <button class="mt-2 col-12 btn btn-primary" onclick="location.href = 'pages/home.php';">Sign In</button>
                        </div>
                        <div class="col-12 col-lg-6">
                            <button class="mt-2 col-12 btn btn-secondary" onclick="pageChnager();">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div>
                            <a class="fs-5 fw-bold" href="adminSignIn.php">Admin Sign In</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>

    <script src="scripts/scripts.js"></script>
    <script src="scripts/bootstrap.bundle.js"></script>
</body>

</html>