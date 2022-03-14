<?php
session_start();
if (isset($_POST['submit'])) {
    // echo "Hello Register";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("location:login.php");
}
?>
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
<style>
  #create:hover
  {
      border: none;
      color: white;
  }
  @media only screen and (max-width: 500px) {
  .register{
    margin-left: 10px;
    
  }
  @media only screen and (max-width: 450px) {
  .register{
    margin-left: 20px;
    
  }
}
  
</style>

<body>
  <?php include "Layout/header1.php" ?>

  <section>
  <section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-6">
        <div class="card rounded-5 text-black" style="opacity:100%;box-shadow: 2px 2px 8px 2px  rgba(0,0,0,0.75);border:none;">
          <div class="row g-0">
            <div class="col-lg-12" >
              <div class="card-body  mx-md-4 " >

                <div class="text-center mb-2">
                  <img src="image/logo.png" style="width: 100px;" alt="logo">
                  <h3 class="mt-1 mb-4 pb-1" style="font-weight: bold;">WELCOME</h3>
                </div>

                <form action="register.php" method="post">              
                <div class="row mb-3">
                    <div class="col">
                      <label for="exampleFormControlInput1" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                      <label for="exampleFormControlInput1" class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email" id="" placeholder="name@example.com">
                    </div>
                  </div>
                  <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="" placeholder="*********">
                  </div>
              
                  <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="phone" class="form-control" name="phone" id="" placeholder="Please enter your phone">
                  </div>
                  
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="row">
                  <div class="col-2" >
                  <button type="submit" class="btn btn-outline-info "  name="submit" value="register" id="create">Register</button>      
                  </div>   
                  <div class="col-2" style="padding-left: 20px;">  
                  <button type="reset" class="btn btn-outline-info register" id="create">Reset</button>      
                  </div>     
                  </div>

                </form>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  </section>


  <?php include "Layout/footer.php" ?>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/validation.js"></script>
  <script src="js/up.js"></script>
</body>

</html>