<!-- navbar & banner -->
<div class="gradient-color">
    <div class="container d-flex flex-wrap justify-content-center justify-content-md-between">
        <span class="text-white">
            <i class="fas fa-envelope text-white me-2"></i>info@educaremm.com
            <i class="fas fa-phone text-white ms-3 me-2"></i>+95 9742110221
            <!-- <i class="fa-solid fa-phone-rotary text-white"></i> 01 211 4321 -->
        </span>
        <span>
            <a href="#" class="fa-brands fa-facebook border-end mx-1 px-2 text-light text-decoration-none" aria-hidden="true"></a>
            <a href="#" class="fab fa-twitter border-end mx-1 px-2 text-light text-decoration-none" aria-hidden="true"></a>
            <a href="#" class="fab fa-youtube border-end mx-1 px-2 text-light text-decoration-none" aria-hidden="true"></a>
            <a href="#" class="fab fa-viber mx-1 px-2 text-light text-decoration-none" aria-hidden="true"></a>
        </span>

    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" alt="" style="width: 50px; height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.php#courses" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu gradient-color" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="primary.php#primary">Primary Education</a></li>
                            <li><a class="dropdown-item" href="summer.php#summer">Summer Programs</a></li>
                            <li><a class="dropdown-item" href="secondary.php#secondary">Secondary Education</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="activities.php">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_us.php">Contact us</a>
                    </li>
                </ul>
                <?php if (isset($_SESSION['email']) && $_SESSION['password']) : ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="nav-link">
                                <i class="fa-solid fa-user"></i>
                                <b><?= $_SESSION['name'] ?></b>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Sign out</a>
                        </li>
                    </ul>
                <?php else : ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Sign In</a>
                        </li>
                        <li>
                            <a class="nav-link" href="register.php">Sign Up</a>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row pb-3">
            <div class="col-12 col-md-6">
                <h1 style="font-size: 3rem; color: #F7941D; text-shadow: 2px 2px 5px white;">
                    Take Time To Learn for Anythings
                </h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos doloremque aliquid eius magni non laboriosam, maxime consequatur et aut quaerat maiores rerum nam eveniet? Vero?</p>
                <form class="mb-4" action="">
                    <div class="row g-2">
                        <div class="col-auto">
                            <input class="form-control form-control-sm rounded-pill" type="text" placeholder="Search courses">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-sm btn-primary px-2 py-1 rounded-pill">Search</button>
                        </div>
                    </div>
                </form>
                <div class="d-flex flex-wrap">
                    <div class="ps-2 me-4 fw-bolder border-start">
                        <span style="color:#F7941D; text-shadow: 0px 0px 3px white;">10+</span> <br>
                        Total Learners
                    </div>
                    <div class="ps-2 fw-bolder border-start">
                        <span style="color:#F7941D; text-shadow: 0px 0px 3px white;">20+</span> <br>
                        Total Courses
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 d-flex align-items-center mt-3">
                <div class="">
                    <div id="carouselExampleControls" class="carousel slide rounded-pill overflow-hidden" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/Slider Photos/slider1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/Slider Photos/slider2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/Slider Photos/slider3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>