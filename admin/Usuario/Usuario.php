<?php

class Usuario 
{
	private $idusuario;
	private $user;
	private $pass;

	function __construct($idusuario,$user,$pass){
			$this->id = $idusuario;
			$this->user = $user;
            $this->pass = $pass;
	}

	function setIdUsuario($idusuario){
		$this->id = $idusuario;
	}
	function setUser($user){
		$this->user = $user;
	}
	function setNombre($pass){
		$this->pass = $pass;
	}

	function getIdUsuario(){
		return $this->id;
	}
	function getUser(){
		return $this->user;
	}
	function getPass(){
		return $this->pass;
	}
}
?>
