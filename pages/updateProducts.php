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
                        <a href="myProducts.php">
                            <div class="back-to-home fs-6 fw-bold"><i class="bi bi-arrow-left"></i> To Your Products</div>
                        </a>
                    </div>

                    <div class="col-6 fw-bold fs-3 text-center">Update Product </div>

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
    <section>
        <div class="container">
            <div class="col-12 my-3">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center bg-dark">
                        <span class="fw-bold fs-4 p-2 text-light text-center">Enter Your Product Details</span>
                    </div>
                    <div class="col-12">
                        <div class="row d-flex flex-row-reverse px-3">

                            <div class="col-12 col-lg-4">
                                <div class="row d-flex justify-content-center mx-2">
                                    <div class="col-12 mt-2">
                                        <div class="row d-flex justify-content-center">
                                            <div class="bg-dark add-product-image" style="border: 2px red solid; background-image: url(../resources/images/c1.png);"></div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <button class="c-btn">Change Image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8 mt-2">
                                <div class="row">

                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <label class="fw-bold form-label">product Id : <span class="text-danger">#23gh4j5h</span></label>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <label class="fw-bold form-label">Product Title</label>
                                            <input type="text" class="c-inputs" style="border: 1px black solid; width: 100%;" />
                                        </div>
                                    </div>


                                    <div class="col-4 mt-2">
                                        <div class="row d-flex justify-content-center">
                                            <label class="fw-bold form-label">Category</label>
                                            <select disabled class="text-light c-inputs p-1 px-2" style="border: 1px black solid;">
                                                <option selected >Category 1</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-4 mt-2">
                                        <div class="row d-flex justify-content-center">
                                            <label class="fw-bold form-label">Brand</label>
                                            <select disabled class="c-inputs p-1 px-2 text-light" style="border: 1px black solid;">
                                                <option selected>Brand 1</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-4 mt-2">
                                        <div class="row d-flex justify-content-center">
                                            <label class="fw-bold form-label">Model</label>
                                            <select  disabled class="text-light c-inputs p-1 px-2" style="border: 1px black solid;">
                                                <option selected >Model 1</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <label class="fw-bold form-label">Product Title</label>
                                            <input type="text" class="c-inputs" style="border: 1px black solid; width: 100%;" />
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="row  px-3">
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <label class="fw-bold form-label">Product Description</label>
                                    <textarea cols="50" rows="10" class="c-inputs" style="border: 1px black solid; width: 100%; height: 200px;"></textarea>
                                </div>
                            </div>

                            <div class="col-6 mt-2">
                                <div class="row">
                                    <label class="fw-bold form-label">Cost *</label>
                                    <input disabled type="text" class="text-light c-inputs" value="$100 .00" style="border: 1px black solid; width: 100%;" />
                                </div>
                            </div>

                            <div class="col-6 mt-2">
                                <div class="row px-2">
                                    <label class="fw-bold form-label">Quantity</label>
                                    <input type="number" class="c-inputs" value="12" style="border: 1px black solid; width: 100%;" />
                                </div>
                            </div>

                            <div class="col-6 mt-2">
                                <div class="row px-2">
                                    <label class="fw-bold form-label">Discount</label>
                                    <input type="number" class="c-inputs" value="12%" style="border: 1px black solid; width: 100%;" value="0%" />
                                </div>
                            </div>

                            <div class="col-6 mt-2">
                                <div class="row px-2">
                                    <label class="fw-bold form-label">Delivery Fee</label>
                                    <input type="number" class="c-inputs" value="$20 .00" style="border: 1px black solid; width: 100%;" />
                                </div>
                            </div>

                            <div class="col-6 mt-2">
                                <div class="row px-2">
                                    <span class="text-danger">*Note that New Tech will Keep 10% from each order..!</span>
                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <div class="row">
                                    <button class="c-btn">Add Product</button>
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