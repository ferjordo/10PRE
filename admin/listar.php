<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <title>Listar registros</title>
  </head>
  <body>
      <?php
require_once 'config.php';
 $conexion = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    if ($conexion->connect_error) {
	# code...
        die("Conexion fallida" . $conexion ->connect_error);
        $conexion -> close();
    }
    $conexion -> set_charset("utf8");

?>
      <div class="jumbotron">
  <div class="container text-center">
    <h1>Lista de registrados </h1>      
    <p>Filtre y visualice los datos ingresados</p>
  </div>
</div>
    <table class="table" id="mydatatable">
  <thead>
   <tr>
			<th>cedula</th>
			<th>apellidos</th>
			<th>Nombre</th>
			<th>Fecha Nacimiento</th>
			<th>Estado civil</th>
			<th>IESS</th>
			<th>Discapacidad</th>
			<th>Instruccion</th>
			<th>Profesion</th>
            <th>Ciudad</th>
       <th>Parroquia</th>
       <th>Direccion</th>
       <th>Teléfono Fijo</th>
       <th>Teléfono Celular</th>
       <th>Email</th>


			
		</tr>
  </thead>
  <tbody>
      <?php foreach ($conexion->query("SELECT postulante.nombres, postulante.apellidos, postulante.cedula,postulante.direccion, postulante.discapacidad,postulante.fecha_nac, postulante.email, postulante.iess, postulante.telefonof, postulante.telefonoc, estadocivil.estado as estado1, instruccion.nombre as instruccion1, parroquia.nombre AS parroquia1, profesion.nombre AS profesion1, ciudad.nombre AS ciudad1 FROM postulante INNER JOIN ciudad ON ciudad.id = postulante.id_ciudad INNER JOIN estadocivil ON estadocivil.id = postulante.id_estadocivil INNER JOIN instruccion ON instruccion.id = postulante.id_instruccion INNER JOIN parroquia ON parroquia.id = postulante.id_parroquia INNER JOIN profesion ON profesion.id = postulante.id_profesion  ") as $row){ // aca puedes hacer la consulta e iterarla con each. 
?> 
<tr>
	<td><?php echo $row['cedula'] // aca te faltaba poner los echo para que se muestre el valor de la variable."SELECT * from cotizacion where id >831 ORDER BY cotizacion.id DESC"  ?></td>
    <td><?php echo $row['apellidos'] ?></td>
    <td><?php echo $row['nombres'] ?></td>
    <td><?php echo $row['fecha_nac'] ?></td>
    <td><?php echo $row['estado1'] ?></td>
    <td><?php echo $row['iess'] ?></td>
    <td><?php echo $row['discapacidad'] ?></td>
    <td><?php echo $row['instruccion1'] ?></td>
    <td><?php echo $row['profesion1'] ?></td>
    <td><?php echo $row['ciudad1'] ?></td>
    <td><?php echo $row['parroquia1'] ?></td>
    <td><?php echo $row['direccion'] ?></td>
    <td><?php echo $row['telefonof'] ?></td>
    <td><?php echo $row['telefonof'] ?></td>
    <td><?php echo $row['email'] ?></td>



 </tr>

<?php

                                                                           }
    ?>
  </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
    $('#mydatatable').DataTable();
          
    var table = $('#mydatatable').DataTable();
 
        $('#mydatatable tbody').on( 'click', 'tr', function () {
            console.log( table.row( this ).data() );
        } );      
          
});
    </script>
  </body>
