<?php

class Postulante {
    private $rut;
    private $nombre;
    private $fechanac;
    private $fono;
    private $correo;
    private $idciudad;
    private $idregion;
    private $idvivienda;
    
    function __construct() {
        
    }

    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFechanac() {
        return $this->fechanac;
    }

    function getFono() {
        return $this->fono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getIdciudad() {
        return $this->idciudad;
    }

    function getIdregion() {
        return $this->idregion;
    }

    function getIdvivienda() {
        return $this->idvivienda;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFechanac($fechanac) {
        $this->fechanac = $fechanac;
    }

    function setFono($fono) {
        $this->fono = $fono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setIdciudad($idciudad) {
        $this->idciudad = $idciudad;
    }

    function setIdregion($idregion) {
        $this->idregion = $idregion;
    }

    function setIdvivienda($idvivienda) {
        $this->idvivienda = $idvivienda;
    }


}

