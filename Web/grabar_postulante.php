<?php



include_once '../Controlador/DaoPostulante.php';
include_once '../Modelo/Postulante.php';

$rut=$_POST["txtRut"];
$nombre=$_POST["txtNombre"];
$fechanac=$_POST["txtFecha"];
$fono=$_POST["txtFono"];
$correo=$_POST["txtCorreo"];
$idciudad=$_POST["cboCiudad"];
$idregion=$_POST["cboRegion"];
$idvivienda=$_POST["cboVivienda"];

$postulante=new Postulante();

$postulante->setRut($rut);
$postulante->setNombre($nombre);
$postulante->setFechanac($fechanac);
$postulante->setFono($fono);
$postulante->setCorreo($correo);
$postulante->setIdciudad($idciudad);
$postulante->setIdregion($idregion);
$postulante->setIdvivienda($idvivienda);

$dao=new DaoPostulante();

$filas_afectadas=$dao->Grabar($postulante);
if ($filas_afectadas>0) {
    header("location:listar_postulantes.php");
} else {
    echo 'No Grabo';
}