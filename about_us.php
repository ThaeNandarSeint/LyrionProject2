<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<style>
        .about_carousel{
          position: relative;
        }
        .about_carousel .img img {
            height: 400px;
            width: 100%;
            object-fit: cover;
        }

        .about_carousel .content  {
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
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
        .ml2 {
            font-size: 1.9em;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            font-weight: 600;
          }

          .ml2 .letter {
            display: inline-block;
            line-height: 1em;
          }
          @media screen and (min-width: 601px) {
           h1.ml2 {
           font-size: 70px;
            }
          }
          
</style>
<body>

 <!-- navbar & banner -->
 <?php include "Layout/header1.php" ?>
  <!-- End Navbar -->

  <div class="about_carousel mb-5 ">
    <div class="img" >
        <img src="assets/images/Slider Photos/pexels-artem-podrez-6941084.jpg" alt="" class="">
    </div>

    <div class="content translate-middle">
        <h1 class="text-center ml2" style="color:#F7941D">About</h1><hr>
        <p style="color:#F7941D" ><a href="index.php" class="text-decoration-none text-secondary" >Home.</a>EDUCARE Education Center</p>
    </div>
</div>
 
<!-- About us -->
  <div class="container mb-3">
    <div class=" d-flex flex-wrap ">
      <div class="col-sm-12 col-md-6 text-center">
        <img src="assets/images/About Us.jpg" alt="" style="border-radius: 20px;width: 100%; margin-bottom: 20px;">
      </div>

      <div class="col-sm-12 col-md-6 px-3 mb-3">
        <h4 class="fw-bolder">About Us</h4>
        <h1 class="rem"  >Let Learn Anythings from Anywhere</h1>
        <blockquote class="text-secondary">Educare International School is an academically focused school that wants to instill and develop strong core values in our students. We firmly believe in the importance and the power of quality education and how it can change lives, societies and countries. As a team, we are committed to educate our next generation and to prepare them to be ready for tomorrow’s world. We aim to deliver quality education to provide more opportunities and access.</blockquote>
        <button class="btn btn-primary rounded-pill">More Details <i class="fas fa-play"></i></button>
      </div>
    </div>
  </div>
  </div>

  <!--Start Footer -->
 
  <?php include "Layout/footer.php" ?>
  <!-- End Footer  -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
      // Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
    </script>
</body>
</html>