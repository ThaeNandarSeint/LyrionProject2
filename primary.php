<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/swiper.bundle.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- <link rel="stylesheet" href="css/courses.css"> -->
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            /* background: #fff; */

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 50%;
            object-fit: cover;
        }

        /* 2 */
        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
            /* filter: blur(2px); */
            border-radius: 10px;
        }

        .swiper-slide-active {
            filter: blur(0px);
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- math -->
    <div class="container" id="math">
        <h1 class="text-center">Mathematics</h1>
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper mb-3">
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Pre-K</h5>
                            <p class="card-text">Counting objects, inside and outside, longer and shorter and more.</p>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Kindergarten</h5>
                            <p class="card-text">Comparing numbers, names of shapes and more.</p>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">First grade</h5>
                            <p class="card-text">Adding and substracting, tens and ones, telling time and more.</p>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Second grade</h5>
                            <p class="card-text">Place-value models, contractions and more</p>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Third grade</h5>
                            <p class="card-text">Multiplying and dividing, bar graphs and more.</p>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Fourth grade</h5>
                            <p class="card-text">Fractions and decimals and more.</p>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Fifth grade</h5>
                            <p class="card-text">Multiplying fractions and decimals and more</p>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination2"></div>
        </div>
    </div>
    <!-- Language -->
    <div class="container-fluid" id="english">
        <h1 class="text-center">English</h1>
        <div class="row gy-3">
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Science -->
    <div class="swiper mySwiper1" id="science">
        <h1 class="text-center">Science</h1>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title pb-1">Numbers and counting up to 3</h6>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title pb-1">Numbers and counting up to 3</h6>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title pb-1">Numbers and counting up to 3</h6>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title pb-1">Numbers and counting up to 3</h6>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title pb-1">Numbers and counting up to 3</h6>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="assets/images/primary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title pb-1">Numbers and counting up to 3</h6>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination1"></div>
    </div>

    <?php include "Layout/footer.php" ?>

    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <script src="js/swiper.bundle.min.js"></script>
    <!-- <script src="js/primary.js"></script> -->
    <script>
        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination2",
                clickable: true,
            },
        });

        var swiper1 = new Swiper(".mySwiper1", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            // slidesPerView: 3,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: true,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination1",
            },
        });
    </script>
    <script src="js/up.js"></script>
</body>

</html>