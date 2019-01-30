<html lang="es">
   <head>
      <meta charset ="utf-8">
      <title>Selecione su opción</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/admin.css" media="screen">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
    <body>
        <div class="jumbotron">
  <div class="container text-center">
    <h1>Bienvenido </h1>      
    <p>Selecione una opción</p>
  </div>
</div>
        
   
<?php
if (!isset($_SESSION)) {
  session_start();
}
require_once 'config.php';
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conexion = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    if ($conexion->connect_error) {
	# code...
        die("Conexion fallida" . $conexion ->connect_error);
        $conexion -> close();
    }
   $conexion -> set_charset("utf8");
    $user = $_POST ['usuario'];
    $pass = $_POST ['pass'];

    
    if(VerificarUser($conexion, $user, $pass)){
       // echo "<h1>Si logeado <h1> ".$user." ".$pass;
    }else{
        header("Location: index.php");
        die();
        
    }
    
    $conexion -> close();

?>
<section>
 <div class="container center">
  <div class="row ">
    <div class="col-md-6 text-center">
      <a href="listar.php"> listar </a>
      </div>
    <div class="col-md-6 text-center">
      <a href="consultar.php">Consultars</a>

      </div>
  </div>
    
  </div>
    
 </section>
    
<?php
function  VerificarUser ($conexion, $user, $pass){
    $sesio=false;
    $sql = "SELECT * FROM usuario WHERE usuario.user ='".$user."' AND usuario.pass='".$pass."'";
    $result = $conexion->query($sql);
    if ($result->num_rows < 1){
        echo'<script type="text/javascript">
                alert("Datos incorrectos");
                window.location.href="index.php";
                </script>';
        //
            session_destroy();
	}else {
       // Set session variables
        $_SESSION["user"] = $user;
        $_SESSION["pass"] = $pass;
        $sesio=true;

    } 
      return $sesio;              
}

?>
 </body>
    <footer>
    </footer>
</html>