<!DOCTYPE html>
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