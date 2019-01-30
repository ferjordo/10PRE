<?php

include_once('Instruccion.php');
include_once('../Collector.php');

class InstruccionCollector extends Collector
{
  
function showInstruccion() {
   $rows = self::$db->getRows("SELECT * FROM instruccion");       
   $arrayInstruccion= array();        
    foreach ($rows as $c){
      $aux = new Instruccion($c{'id'},$c{'nombre'});
      array_push($arrayInstruccion, $aux);
    }
    return $arrayInstruccion;        
  }

function showInstruccion($id) {
$rows = self::$db->getRows("SELECT * FROM instruccion where id= ? ", array ("{$id}"));        
$ObjInstruccion= new Instruccion($rows[0]{'id'},$rows[0]{'nombre'});
  return $ObjInstruccion;        
}

function updateInstruccion($id,$nombre,$idprovincia) {
 $insertrow = self::$db->updateRow("UPDATE public.instruccion SET nombre= ? where id= ? ", array ("{$nombre}",$id));

}

function deleteInstruccion($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.instruccion where id= ? ", array ("{$id}"));
}

function insertInstruccion($nombre,$idprovincia) {
  $rows = self::$db->insertRow("INSERT INTO public.instruccion(nombre) VALUES (?)", array ("{$nombre}"));             
}

}
?>

