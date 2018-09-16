<?php

include_once 'conexion.php';
include_once '../Modelo/Postulante.php';
class DaoPostulante{
    
    private $cone;
    
    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Grabar($postulante) {
        try {
            $sql="insert into postulante values('@rut','@nom','@fe',@fon,'@co',@ci,@re,@viv)";
            $sql= str_replace("@rut", $postulante->getRut(), $sql);
            $sql= str_replace("@nom", $postulante->getNombre(), $sql);
            $sql= str_replace("@fe", $postulante->getFechanac(), $sql);
            $sql= str_replace("@fon", $postulante->getFono(), $sql);
            $sql= str_replace("@co", $postulante->getCorreo(), $sql);
            $sql= str_replace("@ci", $postulante->getIdciudad(), $sql);
            $sql= str_replace("@re", $postulante->getIdregion(), $sql);
            $sql= str_replace("@viv", $postulante->getIdvivienda(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            }
     }
    
    public function Listar() {
        try {
            $sql="select p.rut,p.nombrecompleto,p.fechanac,p.fono,p.correo,r.descripcion,"
                    ."c.descripcion,t.descripcion from postulante p join region r on"
                    ." p.idregion=r.idregion join ciudad c on p.idciudad=c.idciudad" 
                    ." join tipo_vivienda t on p.idtipo_vivienda=t.idtipo_vivienda";
            return $this->cone->SqlSeleccion($sql);

        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Eliminar($rut) {
        try {
            $sql="delete from postulante where rut='$rut'";
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Buscar($rut) {
        try {
            $sql="select * from postulante where rut='$rut'";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Modificar($postulante) {
        try {
            $sql="update postulante set nombrecompleto='@nom',fechanac='@fe',fono=@fon,correo='@co',idciudad=@ci,idregion=@re,idtipo_vivienda=@viv where rut='@rut'";
            $sql= str_replace("@rut", $postulante->getRut(), $sql);
            $sql= str_replace("@nom", $postulante->getNombre(), $sql);
            $sql= str_replace("@fe", $postulante->getFechanac(), $sql);
            $sql= str_replace("@fon", $postulante->getFono(), $sql);
            $sql= str_replace("@co", $postulante->getCorreo(), $sql);
            $sql= str_replace("@ci", $postulante->getIdciudad(), $sql);
            $sql= str_replace("@re", $postulante->getIdregion(), $sql);
            $sql= str_replace("@viv", $postulante->getIdvivienda(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            }
     }
}
