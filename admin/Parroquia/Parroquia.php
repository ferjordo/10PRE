<?php

class Parroquia 
{
	private $idparroquia;
    private $idciudad;
	private $nombre;
	

	function __construct($idparroquia,$idciudad,$nombre){
			$this->id = $idparroquia
            $this->idciudad = $idciudad;
			$this->nombre = $nombre;
	}

	function setIdParroquia($idparroquia){
		$this->id = $idparroquia;
	}
    function setIdCiudad($idciudad){
		$this->idciudad = $idciudad;
	}
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	

	function getIdParroquia(){
		return $this->id;
	}
    function getIdCiudad(){
		return $this->idciudad;
	}
	function getNombre(){
		return $this->nombre;
	}
	
}
?>
