<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<style>
.contact_us_carousel{
  position: relative;
}

.bg-image {
  background-image: url("assets/images/Slider Photos/slider2.jpg");
  height: 400px; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: #F7941D;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}


.ml13 {
  font-size: 1.9em;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  font-weight: 600;
}

.ml13 .letter {
  display: inline-block;
  line-height: 1em;
}
@media screen and (min-width: 601px) {
  h1.ml13 {
    font-size: 70px;
  }
}


</style>
<body>

 <!-- navbar & banner -->
 <?php include "Layout/header1.php" ?>

  <!-- Start Contact Us Carousel-->
<div class=" contact_us_carousel mb-4">
    <div class="bg-image"></div>

    <div class="bg-text">
      <h1 class="ml13">Contact Us</h1>
      <hr>
      <p>EDUCARE Education Center</p>
    </div>
</div>
<!-- Start Contact Us  -->
<div class="container contact_us d-flex flex-wrap ">
  <div class="contact_form col-sm-12 col-md-6 ">
    <form action="_actions/book_order.php" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
      <input type="hidden" name="bookId" value="<?= $book_id ?>">
      <div class="form-group mb-3">
          <label for="validationCustom01" class="form-label">Name:</label>
          <input type="text" name="name" class="form-control" id="validationCustom01" required placeholder="Enter your name">
          <div class="invalid-feedback">
              Name is required!
          </div>
      </div>
      <div class="form-group mb-3">
          <label for="validationCustom02" class="form-label">Phone Number:</label>
          <input type="text" name="phone_number" class="form-control" id="validationCustom02" required placeholder="Enter your phone number">
          <div class="invalid-feedback">
              Your phone number is required!
          </div>
      </div>
      <div class="form-group mb-3">
          <label for="validationCustom03" class="form-label">Email:</label>
          <input type="text" name="email" class="form-control" id="validationCustom03" required placeholder="Enter your email">
          <div class="invalid-feedback">
              Email is required!
          </div>
      </div>

      <div class="form-group mb-3">
          <label for="validationCustomUsername" class="form-label">Address:</label>
          <div class="input-group has-validation">
              <input type="text" name="address" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required placeholder="Enter your address">
              <div class="invalid-feedback">
                  Address is required!
              </div>
          </div>
      </div>
      <div class="form-group mb-3">
          <button class="btn btn-primary" type="submit">Send</button>
      </div>
  </form>
  </div>
  <div class="map col-sm-12 col-md-6 text-center mb-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30554.466555510626!2d96.13982572468976!3d16.811053841080156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eca8da00badf%3A0xddcffcdec96b413!2sBahan%20Township%2C%20Yangon!5e0!3m2!1sen!2smm!4v1647183855327!5m2!1sen!2smm" class="w-75 h-100 " allowfullscreen="" loading="lazy"></iframe>
  </div>
</div>
</div>

<!-- End Contact Us -->

<!--Start Footer -->

  <?php include "Layout/footer.php" ?>
  <!-- End Footer  -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/up.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script>
        // validation
        (function() {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()

        // modal
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })

        JAVASCRIPT

    </script>
    <script>
      // Wrap every letter in a span
var textWrapper = document.querySelector('.ml13');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml13 .letter',
    translateY: [100,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 300 + 30 * i
  }).add({
    targets: '.ml13 .letter',
    translateY: [0,-100],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1200,
    delay: (el, i) => 100 + 30 * i
  });
    </script>
</body>
</html>