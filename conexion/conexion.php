<?php

class conexion
{

    private $host="localhost";
    private $userName="root";
    private $userPassword="";
    private $dbName="restaurante";
    private $connect;

    public function __construct()
    {
        $conexionDB="mysql:hos=". $this->host. ";dbname=". $this->dbName.";charset=utf8";
        try {
            $this->connect= new PDO($conexionDB,$this->userName, $this->userPassword);
        
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // ?echo "SUCCESSFUL CONNECTION";
        } catch (Exception $e) {
               
            $this->connect="FAILED CONNECTION";
            // ! ERROR DE CONECTION  
            echo "ERROR:". $e->getMessage();
        }
    }
    public function setConnec()
    {
       return $this->connect;
    }
  

}

?>