<?php

class Instruccion 
{
	private $idinstruccion;
	private $nombre;
	

	function __construct($idinstruccion,$nombre){
			$this->id = $idinstruccion;
			$this->nombre = $nombre;
	}

	function setIdInstruccion($idinstruccion){
		$this->id = $idinstruccion;
	}
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	

	function getIdInstruccion(){
		return $this->id;
	}
	function getNombre(){
		return $this->nombre;
	}
	
}
?>
