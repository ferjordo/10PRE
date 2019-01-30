<?php 
	include_once('Postulante.php');
	include_once('../Collector.php');

	/**
	* private cedula;
	private apellidos;
    private nombres;
	private fecha_nac;
    private id_estadocivil;
	private iess;
    private discapacidad;
	private id_instruccion;
    private id_profesion;
	private id_ciudad;
    private id_parroquia;
	private direccion;
    private telefonof;
	private telefonoc;
    private email;
	*/
	class PostulanteCollector extends Collector
	{
		function showPostulantes(){
			$rows = self::$db->getRows("SELECT cedula, apellidos, nombres, fecha_nac, id_estadocivil, iess, discapacidad, id_instruccion, id_profesion, id_ciudad, id_parroquia, direccion, telefonof, telefonoc, email FROM postulante");
			$arrayPostulante = array();
			foreach ($rows as $c) {
				$aux = new Postulante($c{'cedula'},$c{'apellidos'},$c{'nombres'},$c{'fecha_nac'},$c{'id_estadocivil'},$c{'iess'},$c{'discapacidad'},$c{'id_instruccion'},$c{'id_profesion'},$c{'id_ciudad'},$c{'id_parroquia'},$c{'direccion'},$c{'telefonof'},$c{'telefonoc'},$c{'email'});
				array_push($arrayPostulante, $aux);
			}
			return $arrayPostulante;
		}

		function showPostulante($cedula){
			$rows = self::$db->getRows("SELECT * FROM postulante WHERE cedula = ?", array("{$cedula}"));
			$ObjPostulante = new Postulante($rows[0]{'cedula'},$rows[0]{'apellidos'},$rows[0]{'nombres'},$rows[0]{'fecha_nac'},$rows[0]{'id_estadocivil'},$rows[0]{'iess'},$rows[0]{'discapacidad'},$rows[0]{'id_instruccion'},$rows[0]{'id_profesion'},$rows[0]{'id_ciudad'},$rows[0]{'id_parroquia'},$rows[0]{'direccion'},$rows[0]{'telefonof'},$rows[0]{'telefonoc'},$rows[0]{'email'});
			return $ObjPostulante;
		}

		function updatePostulante($cedula,$apellidos,$nombres,$fecha_nac,$id_estadocivil,$iess,$discapacidad,$id_instruccion,$id_profesion,$id_ciudad,$id_parroquia,$direccion,$telefonof,$telefonoc,$email){
			$insertRow = self::$db->updateRow("UPDATE public.postulante SET apellidos = ? , nombres = ? , fecha_nac = ?, id_estadocivil = ?, iess = ?, discapacidad = ? , id_instruccion = ?, id_profesion = ?, id_ciudad = ?, id_parroquia = ? , direccion = ?, telefonof = ?, telefonoc = ?, email = ? WHERE cedula = ?", array ("{$apellidos}","{$nombres}","{$fecha_nac}","{$id_estadocivil}","{$iess},"{$discapacidad}","{$id_instruccion}","{$id_profesion}","{$id_ciudad}","{$id_parroquia},"{$direccion}","{$telefonof}","{$telefonoc}","{$email}",$cedula));

		}

		function deletePostulante($cedula){
			$deleteRow = self::$db->deleteRow("DELETE FROM public.postulante WHERE cedula = ?" , array ("{$cedula}"));
		}

		function insertPostulante($cedula,$apellidos,$nombres,$fecha_nac,$id_estadocivil,$iess,$discapacidad,$id_instruccion,$id_profesion,$id_ciudad,$id_parroquia,$direccion,$telefonof,$telefonoc,$email) {
    $rows = self::$db->insertRow("INSERT INTO public.postulante (cedula, apellidos, nombres, fecha_nac, id_estadocivil, iess, discapacidad, id_instruccion, id_profesion, id_ciudad, id_parroquia, direccion, telefonof, telefonoc, email) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array ("{$cedula}","{$apellidos}","{$nombres}","{$fecha_nac}","{$id_estadocivil}","{$iess},"{$discapacidad}","{$id_instruccion}","{$id_profesion}","{$id_ciudad}","{$id_parroquia},"{$direccion}","{$telefonof}","{$telefonoc}","{$email}"));             
  }
	}

 ?>
