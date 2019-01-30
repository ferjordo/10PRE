<?php

class Postulante 
{
	private $cedula;
	private $apellidos;
    private $nombres;
	private $fecha_nac;
    private $id_estadocivil;
	private $iess;
    private $discapacidad;
	private $id_instruccion;
    private $id_profesion;
	private $id_ciudad;
    private $id_parroquia;
	private $direccion;
    private $telefonof;
	private $telefonoc;
    private $email;
	

	function __construct($cedula,$apellidos,$nombres,$fecha_nac,$id_estadocivil,$iess,$discapacidad,$id_instruccion,$id_profesion,$id_ciudad,$id_parroquia,$direccion,$telefonof,$telefonoc,$email){
			$this->cedula = $cedula;
			$this->apellidos = $apellidos;
            $this->nombres = $nombres;
			$this->fecha_nac = $fecha_nac;
            $this->id_estadocivil = $id_estadocivil;
			$this->iess = $iess;
            $this->discapacidad = $discapacidad;
			$this->id_instruccion = $id_instruccion;
            $this->id_profesion = $id_profesion;
			$this->id_ciudad = $id_ciudad;
            $this->id_parroquia = $id_parroquia;
			$this->direccion = $direccion;
            $this->telefonof = $telefonof;
			$this->telefonoc = $telefonoc;
            $this->email = $email;
	}

	function setCedula($cedula){
		$this->cedula = $cedula;
	}
	function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}
    function setNombres($nombres){
		$this->nombres = $nombres;
	}
	function setFechaNac($fecha_nac){
		$this->fecha_nac = $fecha_nac;
	}
	function setIdEstadocivil($id_estadocivil){
		$this->id_estadocivil = $id_estadocivil;
	}
    function setIess($iess){
		$this->iess = $iess;
	}
	function setDiscapacidad($discapacidad){
		$this->discapacidad = $discapacidad;
	}
    function setIdInstruccion($id_instruccion){
		$this->id_instruccion = $id_instruccion;
	}
	function setIdProfesion($id_profesion){
		$this->id_profesion = $id_profesion;
	}
    function setIdCiudad($id_ciudad){
		$this->id_ciudad = $id_ciudad;
	}
	function setIdParroquia($id_parroquia){
		$this->id_parroquia = $id_parroquia;
	}
    function setDireccion($direccion){
		$this->direccion = $direccion;
	}
	function setTelefonof($telefonof){
		$this->telefonof = $telefonof;
	}
    function setTelefonoc($telefonoc){
		$this->telefonoc = $telefonoc;
	}
    	function setEmail($email){
		$this->email = $email;
	}
    

	function getCedula(){
		return $this->cedula;
	}
	function getApellidos(){
		return $this->apellidos;
	}
    function getNombres(){
		return $this->nombres;
	}
    function getFechaNac(){
		return $this->fecha_nac;
	}
    function getIdEstadocivil(){
		return $this->id_estadocivil;
	}
	function getIess(){
		return $this->iess;
	}
    function getDiscapacidad(){
		return $this->discapacidad;
	}
	function getIdInstruccion(){
		return $this->id_instruccion;
	}
    function getIdProfesion(){
		return $this->id_profesion;
	}
	function getIdCiudad(){
		return $this->id_ciudad;
	}
    function getIdParroquia(){
		return $this->id_parroquia;
	}
	function getDireccion(){
		return $this->direccion;
	}
    function getTelefonof(){
		return $this->telefonof;
	}
	function getTelefonoc(){
		return $this->telefonoc;
	}
    function getEmail(){
		return $this->email;
	}
	
	
}
?>
