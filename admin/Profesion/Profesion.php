<?php

class Profesion 
{
	private $idprofesion;
	private $nombre;
	

	function __construct($idprofesion,$nombre){
			$this->id = $idprofesion;
			$this->nombre = $nombre;
	}

	function setIdProfesion($idprofesion){
		$this->id = $idprofesion;
	}
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	

	function getIdProfesion(){
		return $this->id;
	}
	function getNombre(){
		return $this->nombre;
	}
	
}
?>
