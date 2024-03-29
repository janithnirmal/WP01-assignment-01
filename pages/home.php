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
    <?php include("navbar.php"); ?>


    <!-- search bar -->
    <section>
        <div class="container search-container">
            <div class="col-12 h-100 px-3">
                <div class="row h-100 align-items-center justify-content-center">
                    <input type="text" class="col-lg-6 col-10 search-bar" placeholder="Search your items here...">
                    <div class="col-2 search-button text-center pt-1"><i class="bi bi-search text-white fs-3"></i></div>
                </div>
            </div>

        </div>
    </section>

    <!-- content -->
    <section>
        <div class="container">
            <div class="row">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="../resources/images/bg1.jpg" class="d-block" style="width: 100%; background-size: cover;">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="../resources/images/bg2.jpg" class="d-block" style="width: 100%; background-size: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="../resources/images/bg3.jpg" class="d-block" style="width: 100%; background-size: cover;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

    </section>


    <!-- section 2 / product listing -->
    <!-- use a function to send an id which coresponds to the each category, then reset the innerHtml of containers accordingly -->
    <section>
        <div class="hr-line" style=" background-color: rgb(248, 56, 56);">
            <div class="container h-100">
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