<?php

require_once("autoload.php");
class usuario extends conexion{

    private $nombre;
    private $edad;
    private $numero;
    private $conexion;

    public function __construct()
    {
        $this->conexion= new conexion();
        $this->conexion= $this->conexion->setConnec();

        
    }

   public function setInsertFact(string $name, int $ege, int $number)
   {
       $this->nombre=$name;
       $this->edad=$ege;
       $this->numero=$number;

       $sqlInsert="INSERT INTO cliente(nombre,edad,numero) VALUES (?,?,?)";
       $verificarConsulta= $this->conexion->prepare($sqlInsert);
       $MostrarDatosEnArray= [$this->nombre, $this->edad, $this->numero];
       $ejecutarDatosArrays= $verificarConsulta->execute($MostrarDatosEnArray);
       $idDatos= $this->conexion->lastInsertId();
       return $idDatos;


   }
   public function getMostrarDatos()
   {
       $sqlSelect="SELECT * FROM cliente";
       $ConsultarTabla= $this->conexion->query($sqlSelect);
       $mostrarDatos= $ConsultarTabla->fetchall(PDO::FETCH_ASSOC);
       return $mostrarDatos;
   }
   public function UpdateFact(int $idr,string $name, int $ege, int $number)
   {
        $this->nombre = $name;
        $this->edad = $ege;
        $this->numero = $number;
        
   }


}

?>