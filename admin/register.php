<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Register</title>
   <link rel="stylesheet" href="../assets/css/adminstyle.css">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4"> REGISTRO </h4>
          
          <form class="form-box px-3" action="../register.php" method="post">

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
                Register
              </button>
            </div>
          </form>
          <form class="form-box px-3" method="post">
          <div class="mb-3">
            <a href="index.php" type="submit" class="btn btn-block text-uppercase">
                Iniciar Sesion
            </button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>