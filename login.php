<?php 
session_start();
    if($_SESSION['usuario']){
        header('Location: welcome.php');
    }

    require('temp/controlador_session.php');
?>

<Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/login.css">

    <title>Login AcuarioShop</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('assets/img/login3.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>Login to <strong>Acuario Shop</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="" method="post">
                <div class="form-group first">
                  <h4 for="email">Email</h4>
                  <input type="email" class="form-control" placeholder="your-email@gmail.com" name="email" id="email" required>
                </div>
                <div class="form-group last mb-3">
                  <h4 for="password">Password</h4>
                  <input type="password" class="form-control" placeholder="Your Password" name="password" id="password" required>
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input type="checkbox"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-sm btn-block btn-primary">Sign in</button>
                <br>
                <a href="sign_up.php"> <input class="btn btn-sm btn-block btn-primary" value="Sign up"></a>
                <br>
                <input type="button" class="btn btn-sm btn-primary" value="<- Página anterior" onClick="history.go(-1);">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>