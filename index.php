<!-- log in page -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shop | Log In</title>
    <link rel="icon" href="resources/logo/icon.svg" />

    <!-- css files -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>

<body>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center background">
            <div class="box col-8 d-flex flex-column flex-lg-row">
                <div class="b1 col-12 col-lg-5 d-flex justify-content-center align-items-center ">
                    <img src="resources/logo/full-logo-white.svg" class="large-logo" />
                </div>
                <div class="b2 col-12 col-lg-7 flex-column flex-lg-row">
                    <div class="row p-2 mt-3">
                        <div class="col-12 col-lg-6">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-12 col-lg-6">
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
                                <option selected>Select your gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 mt-3">
                            <input class=" form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                            <label class=" form-label">Remind me</label>
                        </div>
                        <div class="col-12 col-lg-6 mt-3 ">
                            <a class="mt-3 " href="#">Forgot password?</a>
                        </div>
                        <div class="col-12 col-lg-6">
                            <button class="mt-2 col-12 btn btn-primary">Sign Up</button>
                        </div>
                        <div class="col-12 col-lg-6">
                            <button class="mt-2 col-12 btn btn-secondary">Sign In</button>
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