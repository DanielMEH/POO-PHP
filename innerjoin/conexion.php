<?php

class conexion
{

    private $host="localhos";
    private $userName="root";
    private $password="";
    private $nameDB="trabajo";
    private $connect;

    public function __construct()
    {
        $conexion="mysql:hos=". $this->host. ";dbname=". $this->nameDB.";charset=UTF8";

        try {
            
            $this->connect=new PDO($conexion,$this->userName,$this->password);
            $this->connect=$this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // ?echo "SUCCESSFUL CONNECTION";

        } catch (Exception $errorDB) {
            $this->connect="ERROR DE CONEXION";
            echo "ERROR: ".$errorDB->getMessage();
        }
    }
    public function cnnectDB()
    {
         return $this->connect;
    }
}




?>