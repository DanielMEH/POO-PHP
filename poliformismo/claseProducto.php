<?php

  abstract class personast
{

    public $nombre;
    public $profesion;
    public $telefono;
    public $edad;

    public function __construct(string $name, string $profesionstr, int $telefonoInt, int $eDad)
    {
        $this->nombre=$name;
        $this->profesion = $profesionstr;
        $this->telefono = $telefonoInt;
        $this->edad = $eDad;
        
    }

    abstract public function personsDate();
    
}


?>