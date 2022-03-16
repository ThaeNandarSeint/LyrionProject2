<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Activities</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/index.css">
  <style>
    .activities_carousel {
      position: relative;
    }

    .activities_carousel .img img {
      height: 400px;
      width: 100%;
      object-fit: cover;

    }

    .activities_carousel .content {
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/opacity/see-through */
      color: #F7941D;
      font-weight: bold;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      width: 80%;
      padding: 20px;
      text-align: center;
    }

    .gallery {
      padding: 10px 0;
    }

    .gallery img {
      background-color: #ffffff;
      border-radius: 5px;
      width: 100%;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
      cursor: pointer;
    }

    #gallery-modal .modal-img {
      width: 100%;
      height: 450px;
    }

    .box {
      transition: 1s;
    }

    .box:hover {
      transform: scale(1.1);
      z-index: 2;
    }

    .ml6 {
      position: relative;
      font-size: 1.9em;
      text-transform: uppercase;
      letter-spacing: 0.2em;
      font-weight: 600;

    }

    .ml6 .text-wrapper {
      position: relative;
      display: inline-block;
      padding-top: 0.2em;
      padding-right: 0.05em;
      padding-bottom: 0.1em;
      overflow: hidden;
    }

    .ml6 .letter {
      display: inline-block;
      line-height: 1em;
    }

    @media screen and (min-width: 601px) {
      h1.ml6 {
        font-size: 70px;
      }
    }
  </style>
</head>

<body>

  <?php include "Layout/header1.php" ?>

  <div class="activities_carousel">
    <div class="img">
      <img src="assets/images/Slider Photos/slider-education.jpg" alt="" class="">
    </div>

    <div class="content translate-middle">
      <h1 class="text-center ml6" style="color:#F7941D;">
        <span class="text-wrapper">
          <span class="letters">Activities</span>
        </span>
      </h1>
      <hr>
      <p style="color:#F7941D">EDUCARE Education Center</p>
    </div>
  </div>

  <!-- Start Activity -->
  <div class="">
    <section class="gallery min-vh-100">
      <h2 class=" mb-4 container" style="color: #F7941D;text-shadow: 2px 2px 5px white;">
        Activities Photos
      </h2>
      <div class="container-lg mb-5">
        <div class="row gy-4 ">
          <div class="col-sm-12 col-md-6 col-lg-3 box">
            <img src="assets/images/Activities/image1.jpg" class="gallery-item" alt="gallery">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 box">
            <img src="assets/images/Activities/image2.jpg" class="gallery-item" alt="gallery">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 box">
            <img src="assets/images/Activities/image 3.jpg" class="gallery-item" alt="gallery">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 box">
            <img src="assets/images/Activities/image 4.jpg" class="gallery-item" alt="gallery">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 box">
            <img src="assets/images/Activities/image 5.jpg" class="gallery-item" alt="gallery">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 box">
            <img src="assets/images/Activities/image 6.jpg" class="gallery-item" alt="gallery">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 box">
            <img src="assets/images/Activities/image 7.jpg" class="gallery-item" alt="gallery">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 box">
            <img src="assets/images/Activities/image 8.jpg" class="gallery-item" alt="gallery">
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Activity</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="img/1.jpg" class="modal-img" alt="modal img">
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- footer -->
  <?php include "Layout/footer.php" ?>


  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/validation.js"></script>
  <script src="js/up.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script>
    document.addEventListener("click", function(e) {
      if (e.target.classList.contains("gallery-item")) {
        const src = e.target.getAttribute("src");
        document.querySelector(".modal-img").src = src;
        const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
        myModal.show();
      }
    })

    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml6 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
        loop: true
      })
      .add({
        targets: '.ml6 .letter',
        translateY: ["1.1em", 0],
        translateZ: 0,
        duration: 750,
        delay: (el, i) => 50 * i
      }).add({
        targets: '.ml6',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
      });
  </script>
</body>

</html>