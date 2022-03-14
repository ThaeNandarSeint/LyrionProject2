<?php
session_start();
// $message = !isset($_SESSION['email']);
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $s_email = $_SESSION['email'];
    $s_password = $_SESSION['password'];
    if ($email === $s_email && $password === $s_password) {
        header('location:index.php');
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        @media only screen and (max-width: 1000px) {
  #image{
    display: none;
    
  }
}
#create{
  border: 1px solid white;
  box-shadow: 3px 3px 5px 0px rgba(0,0,0,0.75);
  color: white;
}
.form-outline,h4,p{
  color: white;
}
#create:hover{
  border: none;
  
}
    </style>
</head>
<body style="
  background-image: linear-gradient(to right bottom, #a294ff, #9999fc, #929df9, #8ca1f4, #88a4ef, #9ea0ee, #b29bea, #c696e4, #f484c7, #ff7898, #ff7e5f, #f7941d);
  background-color: #cccccc;
  height: 667px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;">
<section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-5 text-black" style="opacity:100%;box-shadow: 10px 6px 9px 0px  rgba(0,0,0,0.75),0px 0px 5px 0px;background-image: linear-gradient(to right bottom, #a294ff, #9999fc, #929df9, #8ca1f4, #88a4ef, #9ea0ee, #b29bea, #c696e4, #f484c7, #ff7898, #ff7e5f, #f7941d);border:none;height: 500px;">
          <div class="row g-0">
            <div class="col-lg-6" >
              <div class="card-body p-md-5 mx-md-4 " >
              <div class="text-center mb-5">
              <h4 class="mb-0" >Please login to your account</h4>
                </div>

             
                                              
                <form action="login.php" method="post">
     
                  <div class="form-outline mb-2">
                    <label class="form-label" for="form2Example11">Email</label>
                    <input type="email" name="email" id="" class="form-control" placeholder="Phone number or email address" style="box-shadow: 3px 3px 5px 0px rgba(0,0,0,0.75);"/>
                  
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" id="" class="form-control" style="box-shadow: 3px 3px 5px 0px rgba(0,0,0,0.75);"/>                  
                  </div>

                  <div class="text-center mb-2">
                    <input type="submit" name="submit" value="login" style="width: 100%;height:60%;background:#929df9;font-weight:bold;border:none;" id="create" >
                  
                  </div>

                  <div class="form-outline mb-3 text-center">  
                    <a class="text-muted " href="#!">Forgot password?</a>          
                  </div>            
                  
                  <div class="d-flex align-items-center justify-content-center pb-4" >
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="submit"  class="btn btn-outline-info" id="create"> <a href="register.php" style="text-decoration: none;color:white"> Create new</a></button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 col-md-6" style="text-align: center;background:white;height: 500px;" id="image">           
                  <img src="image/logo.png" style="width: 150px;margin-top: 150px;" alt="logo">
                  <h1 class="mt-1 mb-4 pb-1" style="font-weight: bold;color:#9ea0ee">WELCOME</h1>
                <!-- <img src="image/logo2.png"  alt=""  style="width: 468px;height: 610px;"> -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>