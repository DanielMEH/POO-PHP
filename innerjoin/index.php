<?php

require_once("autload.php");

class usuario extends conexion
{

    private $nombre;
    private $apellido;
    private $conexion;


    function __construct()
    {
        $this->conexion= new conexion();
        $this->conexion=$this->conexion->cnnectDB();
    }

    

    public function setinsert(string $name, string $lastname){

        $this->nombre=$name;
        $this->apellido=$lastname;

        $sql="INSERT INTO empleado(name,apellido) VALUES('$this->nombre','$this->apellido')";
        $verificarConsulta= $this->conexion->prepare($sql);
        $datosArray= [$this->nombre, $this->apallido];
        $mostrarDatos= $verificarConsulta->execute($datosArray);
        $sqlDatos= $this->conexion->lastInsertId();
        return $sqlDatos;

    }


}


?>