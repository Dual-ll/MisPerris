<?php

include_once '../controlador/DaoPostulante.php';
include_once '../modelo/Postulante.php';


$nombre=$_POST["txtNombre"];
$fechanac=$_POST["txtFecha"];
$fono=$_POST["txtFono"];
$correo=$_POST["txtCorreo"];
$idciudad=$_POST["cboRegion"];
$idregion=$_POST["cboCiudad"];
$idvivienda=$_POST["cboVivienda"];
$rut=$_POST["txtRut"];

$postulante=new Postulante();


$postulante->setNombre($nombre);
$postulante->setFechanac($fechanac);
$postulante->setFono($fono);
$postulante->setCorreo($correo);
$postulante->setIdciudad($idciudad);
$postulante->setIdregion($idregion);
$postulante->setIdvivienda($idvivienda);
$postulante->setRut($rut);

$dao=new DaoPostulante();
$filas_afectadas=$dao->Modificar($postulante);
if ($filas_afectadas>0) {
    header("location:listar_postulantes.php");
} else {
    echo 'No modificó';
}