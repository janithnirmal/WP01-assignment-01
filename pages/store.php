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
        <div class="container search-container mt-2" style="background-color: rgb(216, 216, 216)">
            <div class="col-12 h-100 px-3">
                <div class="row h-100 align-items-center justify-content-center">
                    <input type="text" class="col-lg-6 col-10 search-bar" placeholder="Search your items here...">
                    <div class="col-2 search-button text-center pt-1"><i class="bi bi-search text-white fs-3"></i></div>
                </div>
            </div>
        </div>

        <div class="container search-container pb-3 h-100" style="background-color: rgb(216, 216, 216)">
            <div class="col-12 d-flex justify-content-center h-100">
                <div class="row col-lg-8 col-12 h-100">
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

                    <div class="col-12 mt-3 mb-1">
                        <div class="col d-flex justify-content-center align-items-center">
                            <a href="advancedSearch.php"><span class="advanced-button text-decoration-underline link-primary fw-bold fs-5">Advanced</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- section 2 / product listing -->
    <!-- use a function to send an id which coresponds to the each category, then reset the innerHtml of containers accordingly -->
    <section>

        <div class="hr-line mt-2" style=" background-color: rgb(248, 56, 56);">
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



        <div class="tab-content pb-2 mb-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div id="contentHolder" class="content-holder">
                    <!-- category content -->
                    <?php include("categories/ct0.php"); ?>
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