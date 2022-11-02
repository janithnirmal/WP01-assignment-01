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
                        <a href="profile.php">
                            <div class="back-to-home fs-4 fw-bold"><i class="bi bi-arrow-left"></i> To Profile</div>
                        </a>
                    </div>

                    <div class="col-6 fw-bold fs-3 text-center">My Products</div>

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
        <div class="container">
            <div class="col-12">
                <div class="row px-2 my-3">
                    <div class="col-lg-4 col-12 mt-3">
                        <div class="row">
                            <div class="col-12 bg-dark">
                                <span class="fw-bold fs-3 text-light">Filter</span>
                            </div>

                            <div class="col-12 mt-3 bg-danger p-1">
                                <div class="row">
                                    <div class="col-11">
                                        <input type="text" class="c-inputs" />
                                    </div>

                                    <a href="#" class="col-1 ">
                                        <div class="row">
                                            <div class="col-12 p-0">
                                                <div class="row d-flex justify-content-center align-items-center"><i class="bi text-light bi-search fs-4 p-0"></i></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr />
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-bold fs-6">Availability</label>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <div><input type="radio" name="availability" /> Available </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="row">
                                                <div><input type="radio" name="availability" /> Unavailable </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr />
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-bold fs-6">Condition</label>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <div><input type="radio" name="condition" /> Brand New </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="row">
                                                <div><input type="radio" name="condition" /> Used </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr />
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-bold fs-6">Quantity</label>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <div><input name="qty" type="radio" name="" /> High to Low </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="row">
                                                <div><input name="qty" type="radio" /> Low to High </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr />
                            </div>

                            <div class="col-12 mt-2">
                                <label class="form-label fw-bold fs-6">Categories</label>
                                <div class="col-12">
                                    <div class="row">
                                        <select class="col-12 c-inputs" style="border: 2px red solid; width: 100%;">
                                            <option>Select a Category</option>
                                            <option>Accessories</option>
                                            <option>Mobiles</option>
                                            <option>laptops</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <label class="form-label fw-bold fs-6">Brand</label>
                                <div class="col-12">
                                    <div class="row">
                                        <select class="col-12 c-inputs" style="border: 2px red solid; width: 100%;">
                                            <option>Select a Brand</option>
                                            <option>Apple</option>
                                            <option>Samsung</option>
                                            <option>Sony</option>
                                            <option>vivo</option>
                                            <option>asus</option>
                                            <option>msi</option>
                                            <option>oppo</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="row">
                                    <button class="c-btn ">Filter</button>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr />
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <button class="c-btn" onclick="window.location='addProducts.php' ">Add Product</button>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- content -->

                    <div class="col-lg-8 col-12 mt-3 ">
                        <div class="row px-2">
                            <div class="col-12 bg-dark">
                                <span class="fw-bold fs-3 text-light">Products</span>
                            </div>

                            <!-- products goes here -->

                            <div class="col-12 mt-2 bg-light">
                                <div class="bg-white col-12 p-1 pb-3 px-4 my-3">
                                    <div class="row pt-3">
                                        <div class="col-6 fw-bold">Title of the product</div>
                                        <div class="col-4">Available</div>
                                        <div class="col-2 d-flex justify-content-end">$500.00</div>
                                    </div>


                                    <div class="col-12 ">
                                        <hr />
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="product-img" style="width: 150px; height: 150px; background-image: url('../resources/images/c2.jpg'); background-size: contain; background-repeat: none; "></div>
                                        </div>

                                        <div class="col-8">
                                            <div class="row">
                                                <p class="h-75">Donerton Wireless Earbud, Bluetooth 5.3 Headphones Noise Cancelling Mic, Bluetooth Earbud Bass Stereo, 50 hrs Playtime LED Display Earphones, IP7 Waterproof Over Ear Buds for Sport</p>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="text-dark c-btn" style="background-color: transparent;">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Deactivate</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="c-btn bg-secondary">Delete</button>
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="c-btn bg-danger" onclick="window.location='updateProducts.php'">Edit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white col-12 p-1 pb-3 px-4 my-3">
                                    <div class="row pt-3">
                                        <div class="col-6 fw-bold">Title of the product</div>
                                        <div class="col-4">Available</div>
                                        <div class="col-2 d-flex justify-content-end">$500.00</div>
                                    </div>


                                    <div class="col-12 ">
                                        <hr />
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="product-img" style="width: 150px; height: 150px; background-image: url('../resources/images/c2.jpg'); background-size: contain; background-repeat: none; "></div>
                                        </div>

                                        <div class="col-8">
                                            <div class="row">
                                                <p class="h-75">Donerton Wireless Earbud, Bluetooth 5.3 Headphones Noise Cancelling Mic, Bluetooth Earbud Bass Stereo, 50 hrs Playtime LED Display Earphones, IP7 Waterproof Over Ear Buds for Sport</p>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="text-dark c-btn" style="background-color: transparent;">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Deactivate</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="c-btn bg-secondary">Delete</button>
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="c-btn bg-danger" onclick="window.location='updateProducts.php'">Edit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white col-12 p-1 pb-3 px-4 my-3">
                                    <div class="row pt-3">
                                        <div class="col-6 fw-bold">Title of the product</div>
                                        <div class="col-4">Available</div>
                                        <div class="col-2 d-flex justify-content-end">$500.00</div>
                                    </div>


                                    <div class="col-12 ">
                                        <hr />
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="product-img" style="width: 150px; height: 150px; background-image: url('../resources/images/c2.jpg'); background-size: contain; background-repeat: none; "></div>
                                        </div>

                                        <div class="col-8">
                                            <div class="row">
                                                <p class="h-75">Donerton Wireless Earbud, Bluetooth 5.3 Headphones Noise Cancelling Mic, Bluetooth Earbud Bass Stereo, 50 hrs Playtime LED Display Earphones, IP7 Waterproof Over Ear Buds for Sport</p>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="text-dark c-btn" style="background-color: transparent;">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Deactivate</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="c-btn bg-secondary">Delete</button>
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="c-btn bg-danger" onclick="window.location='updateProducts.php'">Edit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white col-12 p-1 pb-3 px-4 my-3">
                                    <div class="row pt-3">
                                        <div class="col-6 fw-bold">Title of the product</div>
                                        <div class="col-4">Available</div>
                                        <div class="col-2 d-flex justify-content-end">$500.00</div>
                                    </div>


                                    <div class="col-12 ">
                                        <hr />
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="product-img" style="width: 150px; height: 150px; background-image: url('../resources/images/c2.jpg'); background-size: contain; background-repeat: none; "></div>
                                        </div>

                                        <div class="col-8">
                                            <div class="row">
                                                <p class="h-75">Donerton Wireless Earbud, Bluetooth 5.3 Headphones Noise Cancelling Mic, Bluetooth Earbud Bass Stereo, 50 hrs Playtime LED Display Earphones, IP7 Waterproof Over Ear Buds for Sport</p>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="text-dark c-btn" style="background-color: transparent;">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Deactivate</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="c-btn bg-secondary">Delete</button>
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="c-btn bg-danger">Edit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- pagination -->
                                <div class="col-12 mt-3 pt-2">
                                    <nav aria-label="Page navigation example w-100">
                                        <ul class="pagination justify-content-center align-items-center">
                                            <li><a class="pagination-block" href="#" style="border-left: solid;">Previous</a></li>
                                            <li><a class="pagination-block pagination-block-active" href="#">1</a></li>
                                            <li><a class="pagination-block" href="#">2</a></li>
                                            <li><a class="pagination-block" href="#">3</a></li>
                                            <li><a class="pagination-block" href="#">Next</a></li>
                                        </ul>
                                    </nav>
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