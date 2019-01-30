<?php

class Estadocivil 
{
	private $idestado;
	private $estado;
	

	function __construct($idestado,$estado){
			$this->id = $idciudad;
			$this->estado = $estado;
	}

	function setIdEstado($idestado){
		$this->id = $idestado;
	}
	function setEstado($estado){
		$this->estado = $estado;
	}
	

	function getIdEstado(){
		return $this->id;
	}
	function getEstado(){
		return $this->estado;
	}
	
}
?>
