<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Formulario de registro</title>
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
  
  
      <link rel="stylesheet" href="css/styler.css">

  
</head>

<body>

 <div class="header">
  <a href="index.html" class="logo"><img src="images/logo.png" height="50"></a>

</div>
    <?php
include_once("admin/Estadocivil/EstadocivilCollector.php");
	$EstadocivilCollectorObj = new EstadocivilCollector();
include_once("admin/Instruccion/InstruccionCollector.php");
	$InstruccionCollectorObj = new InstruccionCollector();
include_once("admin/Profesion/ProfesionCollector.php");
	$ProfesionCollectorObj = new ProfesionCollector();
include_once("admin/Ciudad/CiudadCollector.php");
	$CiudadCollectorObj = new CiudadCollector(); 
include_once("admin/Parroquia/ParroquiaCollector.php");
	$ParroquiaCollectorObj = new ParroquiaCollector();
    ?>


<form method= 'POST' class='form-horizontal' action= 'registro.php' id='postulante' title='postulante'>
  <!--  General -->
  <div class="form-group">
      <p style="color: #606060;" >PLAN HABITACIONAL “UN SOLO TOQUE” - ALFREDO ADUM ZIADE (Prefecto) Guayas
       <br>   
Tenga en cuenta que el registro es individual, ingrese sus datos
          <br>
Los campos con (*) son obligatorios</p>
      
         <br>
         <br>
         <br>
         <br>
    <h2 class="heading">Datos</h2>
      <div class="controls">
      <input type="text" id="cedula" class="floatLabel" name="cedula" required>
      <label for="cedula">Número de Cédula *</label>
    </div>
    <div class="controls">
      <input type="text" id="apellidos" class="floatLabel" name="apellidos" required>
      <label for="apellidos">Apellidos *</label>
    </div>
      <div class="controls">
      <input type="text" id="nombres" class="floatLabel" name="nombres" required>
      <label for="name">Nombres *</label>
    </div>
       <div class="grid">
      <div class="col-1-2">
      <div class="controls">
        <input type="date" id="fecha_nac" class="floatLabel" name="fecha_nac" value="<?php echo date('Y-m-d'); ?>" required>
        <label for="nacimiento" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Fecha de Nacimiento *</label>
      </div>   
          </div> 
       <div class="col-1-2">
       <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel" id="id_estadocivil" name="id_estadocivil" required>
         <?php
           echo "<option selected></option>";
           <foreach ($EstadocivilCollectorObj->showEstadocivil() as $c){
	       echo "<option value='".$c->getIdEstado()."'>".$c->getEstado()."</option>"; 
	       }
        ?>
        </select>
        <label for="fruit">&nbsp;&nbsp;Estado Civil *</label>
      </div>   
             </div> 
          </div> 
    <div class="controls">
        <legend>Afiliado al IESS *</legend>
        <input type="radio" id="iess" name="iess" value="1"> Si
        <input type="radio" id="iess"  name="iess" value="0"> No
        
    </div>       
    <div class="controls">
        <legend>Tiene alguna Discapacidad *</legend>
      <input type="radio" id="discapacidad" name="discapacidad" value="1"> Si
        <input type="radio" id="discapacidad" name="discapacidad" value="0"> No
        
    </div>
       <div class="grid">
     <div class="col-1-2">
       <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel"  id="id_instruccion" name="id_instruccion" required>
         <?php
           echo "<option selected></option>";
           <foreach ($InstruccionCollectorObj->showInstruccion() as $c){
	       echo "<option value='".$c->getIdInstruccion()."'>".$c->getNombre()."</option>"; 
	       }
        ?>
        </select>
        <label for="fruit">&nbsp;&nbsp;Nivel de Instrucción *</label>
      </div>   
             </div> 
       <div class="col-1-2">
       <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel" id="id_profesion" name="id_profesion" required>
          <?php
           echo "<option selected></option>";
           <foreach ($ProfesionCollectorObj->showProfesion() as $c){
	       echo "<option value='".$c->getIdProfesion()."'>".$c->getNombre()."</option>"; 
	       }
        ?>
        </select>
        <label for="fruit">&nbsp;&nbsp;Profesión/Oficio *</label>
      </div>   
             </div> 
          </div> 
      <div class="grid">
     <div class="col-1-2">
       <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel" id="id_ciudad" name="id_ciudad" required>
          <?php
           echo "<option selected></option>";
           <foreach ($CiudadCollectorObj->showCiudad() as $c){
	       echo "<option value='".$c->getIdCiudad()."'>".$c->getNombre()."</option>"; 
	       }
        ?>
        </select>
        <label for="fruit">&nbsp;&nbsp;Ciudad *</label>
      </div>   
             </div> 
       <div class="col-1-2">
       <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel" id="id_parroquia" name="id_parroquia" required>
          <?php
           echo "<option selected></option>";
           <foreach ($ParroquiaCollectorObj->showParroquia() as $c){
	       echo "<option value='".$c->getIdParroquia()."'>".$c->getNombre()."</option>"; 
	       }
        ?>
        </select>
        <label for="fruit">&nbsp;&nbsp;Parroquia *</label>
      </div>   
             </div> 
          </div> 
      <div class="controls">
        <input type="text" id="direccion" class="floatLabel" name="direccion" required>
        <label for="direccion">Direccion *</label>
            </div>
      <div class="grid">
        <div class="col-1-2">
          <div class="controls">
           <input type="text" id="telefonof" class="floatLabel" name="telefonof">
           <label for="telefono">Teléfono Fijo</label>
          </div>          
        </div>
        <div class="col-1-2">
          <div class="controls">
            <input type="text" id="telefonoc" class="floatLabel" name="telefonoc" required>
            <label for="celular">Teléfono Celular *</label>
          </div>          
        </div>
      </div>
      
          <div class="controls">
            
<input type="text" id="email" class="floatLabel" name="email">
      <label for="email">Correo Electrónico</label>
          </div>         
        
  
            <button type="submit" value="Submit" class="col-1-4">Guardar</button>
      </div>  
   <!-- /.form-group -->
    <br>
    <br>
    <br>
    <br>
</form>
    
    <div class="footer">
  <p>
      SÍGUENOS EN REDES        
    </p>
   <a href="https://www.facebook.com/AlfredoAdumZiade/"> <img  src="images/face.png"  width="40" ></a>
    <a href="https://twitter.com/Alfredo_Adum_Z"><img  src="images/twit.png"  width="40" ></a>
    <a href="https://www.instagram.com/alfredoadumziade/"><img  src="images/inst.png"  width="40" ></a>
</div>
    
    
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery-ui-autocomplete.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.min.js'></script>

  

    <script  src="js/indexr.js"></script>




</body>

</html>
