<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../assets/css/adminstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
</head>

<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">LOGIN</h4>
          
        <form class="form-box px-3" action="../login.php" method="post">

          <div class="form-input">
          <span><i class="fa fa-user-o"></i></span>
              <input type="text" name="usuario" placeholder="User" tabindex="10">
            </div>

            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="clave" placeholder="contraseña">
            </div>

            <div class="mb-3">
              <button  name="btningresar" type="submit" class="btn btn-block text-uppercase">
                Entrar
              </button>
            </div>
          </form>
          <form class="form-box px-3" method="post">
          <div class="mb-3">
            <a href="register.php" type="submit" class="btn btn-block text-uppercase">
                Registrarse
            </button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>