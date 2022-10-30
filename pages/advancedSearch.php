<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New Tech | Store</title>
    <link rel="icon" href="../resources/logo/icon.svg" />

    <!-- css files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>

    <!-- nav bar -->
    <?php include("navbar.php"); ?>

    <!-- search bar -->
    <section>
        <div class="container">

            <div class="col-12">
                <div class="pt-2 d-flex justify-content-center align-items-center">
                    <span class="fs-2 fw-bold">Advaced Search</span>
                </div>
            </div>

            <div class="col-12 text-center pt-1 d-flex justify-content-center">
                <hr style="width: 80%; border-width: 3px;" />
            </div>

            <div class="col-12 p-3 mb-2 advanced-search-container">
                <div class="col-12 h-100 px-3">
                    <div class="row h-100 align-items-center justify-content-center">
                        <input type="text" class="col-lg-6 col-10 search-bar" placeholder="Search your items here...">
                        <div class="col-2 search-button text-center pt-1"><i class="bi bi-search text-white fs-3"></i></div>
                    </div>
                </div>




                <div class="col-12 d-flex justify-content-center h-100 mt-3">
                    <div class="row col-lg-8 col-12 h-100 pb-3">
                        <div class="col-6 p-0">
                            <select class="c-inputs px-4  col-12">
                                <option disabled selected>Select a Brand</option>
                                <option>Apple</option>
                                <option>Samsung</option>
                                <option>sony</option>
                                <option>vivo</option>
                                <option>msi</option>
                                <option>asus</option>
                            </select>
                        </div>

                        <div class="col-6 p-0">
                            <select class="c-inputs px-4 float-end col-12 ">
                                <option disabled selected>Select a model</option>
                                <option>galaxy j7</option>
                                <option>galaxy s5</option>
                                <option>galaxy a20</option>
                                <option>galaxy a30</option>
                                <option>galaxy note 7</option>
                            </select>
                        </div>


                        <div class="col-6 p-0 mt-2">
                            <div class="col-12">
                                <label class="fw-bold ">Price From</label>
                                <input type="text" class="c-inputs" style="background-color:white">
                            </div>
                        </div>


                        <div class="col-6 p-0 mt-2">
                            <div type="text" class="" style=" background-color:rgb(78, 78, 78);">
                                <label class="fw-bold float-end" style="width: 95%;">Price To</label>
                                <input type="text" class="c-inputs px-4 float-end col-12" style="background-color:white">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 p-0 mt-2">
                            <div class="col-12">
                                <label class="fw-bold ">Condition</label>
                                <div class="c-inputs row pt-2 px-4 col-12">
                                    <div class="col-6">
                                        <input type="radio" style="background-color:white">
                                        <label>Brand New</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" style="background-color:white">
                                        <label>Brand New</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 p-0 mt-2">
                            <div class="col-12">
                                <label class="fw-bold float-lg-end col-11">Availablity</label>
                                <div class="c-inputs row pt-2 px-4   float-lg-end col-12">
                                    <div class="col-6">
                                        <input type="radio" style="background-color:white">
                                        <label>Available</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" style="background-color:white">
                                        <label>Out of Stock</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 p-0 mt-2">
                            <div class="col-12 d-flex justify-content-center">
                                <button class="c-inputs bg-secondary fw-bold fs-5 text-light" style="width: 100%;">Reset</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 text-center pt-1 d-flex justify-content-center mb-3">
                <hr style="width: 80%; border-width: 3px;" />
            </div>

        </div>
    </section>


    <!-- section 2 / product listing -->
    <!-- use a function to send an id which coresponds to the each category, then reset the innerHtml of containers accordingly -->
    <section>

        <div class="hr-line mt-2 mb-2" style=" background-color: rgb(248, 56, 56);">
            <div class="container h-100 d-flex justify-content-between">
                <ul class="d-flex h-100  align-items-center list-unstyled" id="myTab" role="tablist">
                    <li id="navigation-default" class="h-100 default-category category-navigation nav-item border-0">
                        <button id="ctb0" onclick="categoryChanger(event);" value="ct0" style=" border: 0; border-radius: 0; background-color: transparent;" class="px-3 h-100 py-2 nav-link" type="button">Mobiles</button>
                    </li>
                    <li class="h-100 category-navigation  nav-item">
                        <button id="ctb1" onclick="categoryChanger(event);" value="ct1" style=" border: 0; border-radius: 0; background-color: transparent;" class="px-3 h-100 py-2 nav-link" type="button">Laptops</button>
                    </li>
                    <li class="h-100 category-navigation  nav-item">
                        <button id="ctb2" onclick="categoryChanger(event);" value="ct2" style=" border: 0; border-radius: 0; background-color: transparent;" class="px-3 h-100 py-2 nav-link" type="button">Accosories</button>
                    </li>
                    <li class="h-100 category-navigation  nav-item">
                        <button id="ctb3" onclick="categoryChanger(event);" value="ct3" style=" border: 0; border-radius: 0; background-color: transparent;" class="px-3 h-100 py-2 nav-link" type="button">Other</button>
                    </li>
                </ul>

                <div class="sort-box">
                    <select class="border-0 w-100 h-100 ps-3 fw-bold">
                        <option>Price Low to High</option>
                        <option>Price High to Low</option>
                        <option>Date Added New to Old</option>
                        <option>Date Added Old to New</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="col-12 border p-2 border-danger mb-3 d-flex align-content-center">
                <span class="fw-bold fs-2 text-center col-12">Search an Item in the Search Bar</span>
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