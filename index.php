<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/courses.css">
</head>

<body>
  <?php include "Layout/header.php" ?>

  <?php include "courses.php" ?>

  <!-- About us -->
  <div class="bg-light" id="about">
    <div class="container">
      <div class="row py-5">
        <div class="col-6 text-center">
          <img src="assets/images/About Us.jpg" alt="" style="border-radius: 20px;">
        </div>
        <div class="col-6">
          <h4 class="fw-bolder" style="color: #ff7898;">About Us</h4>
          <h1 style="font-size: 4rem;">Let Learn <span>Anythings</span> from <span style="color: rgb(199, 148, 6)">Anywhere</span></h1>
          <blockquote class="text-secondary">Educare International School is an academically focused school that wants to instill and develop strong core values in our students. We firmly believe in the importance and the power of quality education and how it can change lives, societies and countries. As a team, we are committed to educate our next generation and to prepare them to be ready for tomorrow’s world. We aim to deliver quality education to provide more opportunities and access.</blockquote>
          <button class="btn btn-primary rounded-pill">More Details <i class="fas fa-play ms-2"></i></button>
        </div>
      </div>
    </div>
  </div>

  <!-- Activities -->
  <div class="my-bg-color py-5" id="activities">
    <h1 class="text-center " style="font-size: 4rem; color: #ff7898;">Our <span class="" style="color: rgb(199, 148, 6)">Activities</span></h1>
    <div id="flexbox" class="container">
      <div class="column">
        <img src="assets/images/Activities/image1.jpg" alt="Image" width="100%" />
        <img src="assets/images/Activities/image2.jpg" alt="Image" width="100%" />
      </div>
      <div class="column">
        <img src="assets/images/Activities/image 3.jpg" alt="Image" width="100%" />
        <img src="assets/images/Activities/image 4.jpg" alt="Image" width="100%" />
      </div>
      <div class="column">
        <img src="assets/images/Activities/image 5.jpg" alt="" width="100%">
        <img src="assets/images/Activities/image 6.jpg" alt="" width="100%">
      </div>
      <div class="column">
        <img src="assets/images/Activities/image 7.jpg" alt="" width="100%">
        <img src="assets/images/Activities/image 8.jpg" alt="" width="100%">
      </div>
    </div>
  </div>

  <?php include "Layout/footer.php" ?>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/validation.js"></script>
  <script src="js/up.js"></script>
</body>

</html>