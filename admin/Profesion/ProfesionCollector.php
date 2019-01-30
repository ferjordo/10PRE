<?php

include_once('Profesion.php');
include_once('../Collector.php');

class ProfesionCollector extends Collector
{
  
function showProfesion() {
   $rows = self::$db->getRows("SELECT * FROM profesion");       
   $arrayProfesion= array();        
    foreach ($rows as $c){
      $aux = new Profesion($c{'id'},$c{'nombre'});
      array_push($arrayProfesion, $aux);
    }
    return $arrayProfesion;        
  }

function showProfesion($id) {
$rows = self::$db->getRows("SELECT * FROM profesion where id= ? ", array ("{$id}"));        
$ObjProfesion= new Profesion($rows[0]{'id'},$rows[0]{'nombre'});
  return $ObjProfesion;        
}

function updateProfesion($id,$nombre) {
 $insertrow = self::$db->updateRow("UPDATE public.profesion SET nombre= ? where id= ? ", array ("{$nombre}",$id));

}

function deleteProfesion($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.profesion where id= ? ", array ("{$id}"));
}

function insertProfesion($nombre) {
  $rows = self::$db->insertRow("INSERT INTO public.profesion(nombre) VALUES (?)", array ("{$nombre}"));             
}

}
?>

