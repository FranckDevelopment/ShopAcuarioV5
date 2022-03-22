<Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/logo_black.png" />
    <!-- Style -->
    <link rel="stylesheet" href="css/login.css">

    <title>Login AcuarioShop</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('assets/img/login2.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h4>Registrate en <strong>Acuario Shop</strong></h4>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form method="POST" action="temp/insertar_usu.php" enctype="multipart/form-data" >
                <div class="form-group last mb-3">
                  <h6 for="password">Foto</h6>
                  <input type="File"  name="Foto">
                </div>
                <div class="form-group first">
                  <h6 for="username">RFC</h6>
                  <input type="txt" class="form-control" name="txtRFC" placeholder="Ingresa tu RFC" required>
                </div>
                <div class="form-group last mb-3">
                  <h6 for="password">Nombre</h6>
                  <input type="txt" class="form-control" name="txtNom" placeholder="Ingresa tu nombre" required>
                </div>
                <div class="form-group first">
                  <h6 for="username">Apellidos</h6>
                  <input type="txt" class="form-control" name="txtApe" placeholder="Ingresa tus apellidos" >
                </div>
                <div class="form-group first">
                  <h6 for="username">Email</h6>
                  <input type="email" class="form-control" name="txtmail" placeholder="Ingresa tu Correo" required>
                </div>
                <div class="form-group last mb-3">
                  <h6 for="password">Password</h6>
                  <input type="password" class="form-control" name="txtpass" placeholder="Ingresa una contraseña" required>
                </div>
                <div class="form-group last mb-3">
                  <h6 for="password">Telefono</h6>
                  <input type="tel" class="form-control" name="numtel" placeholder="Ingresa un Telefono " required>
                </div>
                <br>
                <center><button type="submit" name="submit" class="btn btn-sm btn-block btn-primary">Registrar</button></center> 
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