<?php

include_once '../Controlador/DaoPostulante.php';
$dao=new DaoPostulante();
$rut=$_GET["rut"];
$resp=$dao->Eliminar($rut);

//redireccionar
header("location:listar_postulantes.php");

