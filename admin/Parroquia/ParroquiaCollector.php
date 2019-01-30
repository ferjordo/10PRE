<?php

include_once('Parroquia.php');
include_once('../Collector.php');

class ParroquiaCollector extends Collector
{
  
function showParroquia() {
   $rows = self::$db->getRows("SELECT * FROM parroquia");       
   $arrayParroquia= array();        
    foreach ($rows as $c){
      $aux = new Parroquia($c{'id'},$c{'idciudad'},$c{'nombre'});
      array_push($arrayParroquia, $aux);
    }
    return $arrayCiudad;        
  }

function showParroquia($id) {
$rows = self::$db->getRows("SELECT * FROM parroquia where id= ? ", array ("{$id}"));        
$ObjParroquia= new Parroquia($rows[0]{'id'},$rows[0]{'idciudad'},$rows[0]{'nombre'});
  return $ObjParroquia;        
}
function showParroquiaxCiudad($idciudad) {
$rows = self::$db->getRows("SELECT * FROM parroquia where idciudad= ? ", array ("{$idciudad}"));        
$ObjCiudad= new Ciudad($rows[0]{'id'},$rows[0]{'idciudad'},$rows[0]{'nombre'});
  return $ObjCiudad;        
}
    
function updateParroquia($id,$nombre,$idprovincia) {
 $insertrow = self::$db->updateRow("UPDATE public.parroquia SET idciudad= ?, nombre= ? where id= ? ", array ("{$idciudad}","{$nombre}",$id));

}

function deleteParroquia($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.parroquia where id= ? ", array ("{$id}"));
}

function insertParroquia($idciudad,$nombre) {
  $rows = self::$db->insertRow("INSERT INTO public.parroquia(idciudad,nombre) VALUES (?,?)", array ("{$idciudad}","{$nombre}"));             
}

}
?>

