<?php
require_once("../libraries/conexion.php");
class personaModel
{
    private $conexion;

   public function __construct()
    {
        $this->conexion=new conexion();
        $this->conexion= $this->conexion->connect();     
    }
    public function getPersonas(){
        $arrayDatos= array();
        $sql = $this->conexion->query('CALL selec_perrsonas()');
        while ($row = $sql->fetch_array()) {
            array_push($arrayDatos,$row);
        }
        
        return $arrayDatos;  
    }
}