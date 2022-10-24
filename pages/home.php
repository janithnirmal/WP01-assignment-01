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
                    <li class="h-100 category-navigation px-3 py-2 nav-item border-0" role="presentation">
                        <button style=" border: 0; border-radius: 0; background-color: transparent;" class="h-100 nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                    </li>
                    <li class="h-100 category-navigation  px-3 py-2 nav-item" role="presentation">
                        <button style=" border: 0; border-radius: 0; background-color: transparent;" class="h-100 nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                    </li>
                    <li class="h-100 category-navigation  px-3 py-2 nav-item" role="presentation">
                        <button style=" border: 0; border-radius: 0; background-color: transparent;" class="h-100 nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                    </li>
                    <li class="h-100 category-navigation  px-3 py-2 nav-item" role="presentation">
                        <button style=" border: 0; border-radius: 0; background-color: transparent;" class="h-100 nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Disabled</button>
                    </li>
                </ul>
            </div>
        </div>



        <div class="tab-content pb-2 mb-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <!-- category 1 -->
                <div class="container text-center">
                    <div class="row mt-4">
                        <div class="col-12 col-md-6 col-lg-4 mt-4">
                            <div class="col">
                                <div class="card">
                                    <img src="../resources/images/c1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-4">
                            <div class="col">
                                <div class="card">
                                    <img src="../resources/images/c1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-4">
                            <div class="col">
                                <div class="card">
                                    <img src="../resources/images/c1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-4">
                            <div class="col">
                                <div class="card">
                                    <img src="../resources/images/c1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
    <footer class="bg-dark">
        <div class="container">
            <div class="row text-white">
                <div class="col-12 col-md-4 text-center text-lg-start">
                    <span class="fw-bold mb-3" style="font-size: 20px;">Contact Us</span>
                    <div class="col-12">rmjanithnirmal@gmail.com</div>
                    <div class="col-12">+94 71 090 2997</div>
                    <div class="col-12">+94 71 183 2550</div>
                    <div class="col-12">No. 20, Charles Piyanama Road,<br> Nagoda, Kandana</div>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <span>2022&copy; | All right researved by New Tech</span>
                    <hr class="hr">
                    <span><a href="#">Privacy Policy</a></span>
                    <i class="bi bi-dot"></i>
                    <span><a href="#">Terms & Conditions</a></span>
                </div>
                <div class="col-12 col-md-4 text-lg-end text-center">
                    <div class="row col-6 float-end">
                        <div class="col-2"><i class="bi bi-instagram"></i></div>
                        <div class="col-2"><i class="bi bi-facebook"></i></div>
                        <div class="col-2"><i class="bi bi-linkedin"></i></div>
                        <div class="col-2"><i class="bi bi-twitter"></i></div>
                        <div class="col-2"><i class="bi bi-youtube"></i></div>
                        <div class="col-2"><i class="bi bi-whatsapp"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="../scripts/bootstrap.bundle.js"></script>
    <script src="../scripts/scripts.js"></script>
</body>

</html>