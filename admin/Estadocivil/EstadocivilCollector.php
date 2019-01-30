<?php

include_once('Estadocivil.php');
include_once('../Collector.php');

class EstadocivilCollector extends Collector
{
  
function showEstadocivil() {
   $rows = self::$db->getRows("SELECT * FROM estadocivil");       
   $arrayEstadocivil= array();        
    foreach ($rows as $c){
      $aux = new Estadocivil($c{'id'},$c{'estado'});
      array_push($arrayEstadocivil, $aux);
    }
    return $arrayEstadocivil;        
  }

function showEstadocivil($id) {
$rows = self::$db->getRows("SELECT * FROM estadocivil where id= ? ", array ("{$id}"));        
$ObjEstadocivil= new Estadocivil($rows[0]{'id'},$rows[0]{'estado'});
  return $ObjEstadocivil;        
}

function updateEstadocivil($id,$estado) {
 $insertrow = self::$db->updateRow("UPDATE public.estadocivil SET estado= ? where id= ? ", array ("{$estado}",$id));

}

function deleteEstadocivil($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.estadocivil where id= ? ", array ("{$id}"));
}

function insertEstadocivil($estado) {
  $rows = self::$db->insertRow("INSERT INTO public.estadocivil(estado) VALUES (?)", array ("{$estado}"));             
}

}
?>

