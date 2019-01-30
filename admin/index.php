<?php
   session_start();
   ?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset ="utf-8">
      <title>Iniciar Sesión</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/admin.css" media="screen">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <style>
      :root {
      --input-padding-x: 1.5rem;
      --input-padding-y: .75rem;
      }
      body {
      background: #70B7D1;
      background: linear-gradient(to right, #70B7D1, #33AEFF);
      }
      .card-signin {
      border: 0;
      border-radius: 1rem;
      box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
      }
      .card-signin .card-title {
      margin-bottom: 2rem;
      font-weight: 300;
      font-size: 1.5rem;
      }
      .card-signin .card-body {
      padding: 2rem;
      }
      .form-signin {
      width: 100%;
      }
      .form-signin .btn {
      font-size: 80%;
      border-radius: 5rem;
      letter-spacing: .1rem;
      font-weight: bold;
      padding: 1rem;
      transition: all 0.2s;
      }
      .form-label-group {
      position: relative;
      margin-bottom: 1rem;
      }
      .form-label-group input {
      height: auto;
      border-radius: 2rem;
      }
      .form-label-group>input,
      .form-label-group>label {
      padding: var(--input-padding-y) var(--input-padding-x);
      }
      .form-label-group>label {
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      margin-bottom: 0;
      /* Override default `<label>` margin */
      line-height: 1.5;
      color: #495057;
      border: 1px solid transparent;
      border-radius: .25rem;
      transition: all .1s ease-in-out;
      }
      .form-label-group input::-webkit-input-placeholder {
      color: transparent;
      }
      .form-label-group input:-ms-input-placeholder {
      color: transparent;
      }
      .form-label-group input::-ms-input-placeholder {
      color: transparent;
      }
      .form-label-group input::-moz-placeholder {
      color: transparent;
      }
      .form-label-group input::placeholder {
      color: transparent;
      }
      .form-label-group input:not(:placeholder-shown) {
      padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
      padding-bottom: calc(var(--input-padding-y) / 3);
      }
      .form-label-group input:not(:placeholder-shown)~label {
      padding-top: calc(var(--input-padding-y) / 3);
      padding-bottom: calc(var(--input-padding-y) / 3);
      font-size: 12px;
      color: #777;
      }
   </style>
   
    <?php
            if (isset($_SESSION['MiSession'])) {
            echo "<p>Hola:(".$_SESSION['MiSession'].") [<a id='enlaceSalir' href='salir.php'>Salir</a>]</p>";
            }
            else {
            session_destroy();
            }
            
            ?>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Iniciar sesión</h5>
                <form class="form-signin" action="dash.php" method="post">
                  <div class="form-label-group">
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
                    <label for="usuario">Usuario</label>
                  </div>

                  <div class="form-label-group">
                    <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña" required>
                    <label for="pass">Contraseña</label>
                  </div>

                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Recordar Contraseña</label>
                  </div>
                    <input class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Iniciar sesión ">
                  <hr class="my-4">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>

