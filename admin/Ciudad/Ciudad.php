<?php

class Ciudad 
{
	private $idciudad;
	private $nombre;
	

	function __construct($idciudad,$nombre){
			$this->id = $idciudad;
			$this->nombre = $nombre;
	}

	function setIdCiudad($idciudad){
		$this->id = $idciudad;
	}
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	

	function getIdCiudad(){
		return $this->id;
	}
	function getNombre(){
		return $this->nombre;
	}
	
}
?>
