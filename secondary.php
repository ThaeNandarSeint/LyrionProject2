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
    <link rel="stylesheet" href="css/primary.css">
    <style>
        .englishS{
            width: 320px;
            height: 350px;
        }
        .englishS img{
            width: 320px;
            height: 250px;
            object-fit: cover;
        }
        .mathS{
            width: 350px;
            height: 300px;
        }
        .mathS img{
            width: 350px;
            height: 200px;
        }
    </style>
</head>

<body>
    <?php include "Layout/header.php" ?>
    <!-- math -->
    <div class="container mt-5" id="math">
        <h1 class="text-center text-info">Jump to <span style="color: #bb6803;">Mathematics</span></h1>
        <div class="text-center">These lessons help you brush up on important <span class="text-primary">math topics</span> and prepare you to dive into <span class="text-danger">skill practice</span>!</div>
        <div class="swiper mySwiper1">
            <div class="swiper-wrapper mb-3">
                <div class="swiper-slide">
                    <div class="mathS card">
                        <img src="assets/images/courses/function_secondary.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Functions and their Families</h5>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mathS card">
                        <img src="assets/images/courses/trigo_secondary.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Trigonmetry and their Functions</h5>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mathS card">
                        <img src="assets/images/courses/logarithm_secondary.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Logarithmic Functions</h5>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mathS card">
                        <img src="assets/images/courses/limit_secondary.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Limits and Continuity</h5>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mathS card">
                        <img src="assets/images/courses/derivative_secondary.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Derivative Rules and Strategies</h5>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mathS card">
                        <img src="assets/images/courses/inequation_secondary.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Equations and Inequations</h5>
                            <div class="d-flex justify-content-evenly border-top pt-1">
                                <p>2 Hours</p>
                                <p>6 Months</p>
                                <p>12 Modules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mathS card">
                        <img src="assets/images/courses/complexnumber_secondary.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-1">Real Numbers and Complex Numbers</h5>
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
    <!-- English -->
    <div class="container-fluid" id="english">
        <h1 class="text-center" style="color: #bb6803;">Learn English as a <span class="text-info">Native Language</span></h1>
        <div class="text-center">Improve your <span class="text-danger">level</span> and get the <span class="text-primary">score</span> you want!</div>
        <div class="row gy-3 mt-4">
            <div class="col-12 col-md-3">
                <div class="englishS">
                    <img src="assets/images/courses/reading_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center pb-1">Reading Strategies</h5>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="englishS">
                    <img src="assets/images/courses/writing_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center pb-1">Writing Strategies</h5>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="englishS">
                    <img src="assets/images/courses/listening_secondary.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center pb-1">Listening Strategies</h5>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="englishS">
                    <img src="assets/images/courses/speaking_secondary.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center pb-1">Speaking Strategies</h5>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="englishS">
                    <img src="assets/images/courses/grammar_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center pb-1">Grammar and Mechanics</h5>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="englishS">
                    <img src="assets/images/courses/vocabulary_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center pb-1">Vocabulary Practice</h5>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="englishS">
                    <img src="assets/images/courses/ielts_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center pb-1">Preparation for IELTS</h5>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="englishS">
                    <img src="assets/images/courses/toefl_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center pb-1">Preparation for TOEFL</h5>
                        <div class="d-flex justify-content-evenly border-top pt-1">
                            <p>2 Hours</p>
                            <p>6 Months</p>
                            <p>12 Modules</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Science -->
    <div class="swiper mySwiper2" id="science">
        <h1 class="text-center text-info">Explore your <span style="color: #bb6803;">Scientific Knowledge</span></h1>
        <div class="text-center">Build your <span class="text-primary">present</span> (and your <span class="text-danger">future</span>) with us!</div>
        <div class="swiper-wrapper mt-5">
            <div class="swiper-slide">
                <div class="card">
                    <img src="assets/images/courses/earthsystem_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-1">Earth's Systems</h5>
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
                    <img src="assets/images/courses/mechanic_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-1">Mechanics and Optics</h5>
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
                    <img src="assets/images/courses/rescources_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-1">Conservation and Natural Resources</h5>
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
                    <img src="assets/images/courses/ecosystem_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-1">Adaptations and Ecosystems</h5>
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
                    <img src="assets/images/courses/electricity_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-1">Electricity and Magnetism</h5>
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
                    <img src="assets/images/courses/atom_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-1">Atoms and Molecules</h5>
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
                    <img src="assets/images/courses/astronomy_secondary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-1">Cosmology and Astronomy</h5>
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
        var swiper2 = new Swiper(".mySwiper1", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination2",
                clickable: true,
            },
        });

        var swiper1 = new Swiper(".mySwiper2", {
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