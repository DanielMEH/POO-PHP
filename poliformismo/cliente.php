
<?php

require_once "index.php";

class cliente extends personas{
    
    private $puesto;

    public function __construct(int $identific, string $name, int $edad)
    {
        parent::__construct($identific,$name, $edad);
    }

    public function setNombreDelPuesto(string $puestoasignado){

        $this->puesto=$puestoasignado;

    }
    public function getDatosDelPuesto():string
    {
        return $this->puesto;
    }


}

?>