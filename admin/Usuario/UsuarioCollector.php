<?php

include_once('Usuario.php');
include_once('../Collector.php');

class UsuarioCollector extends Collector
{
  
function showUsuarios() {
   $rows = self::$db->getRows("SELECT * FROM usuario");       
   $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'id'},$c{'user'},$c{'pass'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

function showUsuario($id) {
$rows = self::$db->getRows("SELECT * FROM usuario where id= ? ", array ("{$id}"));        
$ObjUsuario= new Usuario($rows[0]{'id'},$rows[0]{'user'},$rows[0]{'pass'});
  return $ObjUsuario;        
}

function updateUsuario($id,$user,$pass) {
 $insertrow = self::$db->updateRow("UPDATE public.usuario SET user= ?, pass= ? where id= ? ", array ("{$user}","{$pass}",$id));

}

function deleteUsuario($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.usuario where id= ? ", array ("{$id}"));
}

function insertUsuario($nombre,$idprovincia) {
  $rows = self::$db->insertRow("INSERT INTO public.usuario(user,pass) VALUES (?,?)", array ("{$user}","{$pass}"));             
}

}
?>

