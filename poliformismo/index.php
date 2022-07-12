<?php


class personas{

    public $identificacion;
    public $nombre;
    public $edad;

    public function __construct(int $identific, string $name, int $edad)
    {
        $this->identificacion= $identific;
        $this->nombre= $name;
        $this->edad=$edad;
    }

    public function userDate(){

        $datos="
        <h1>Datos de la persona</h1>

        Identificación: {$this->identificacion}<br>
        Nombre: {$this->nombre}<br>
        Edad: {$this->edad}<br>

        
        ";
        return $datos;
    }

}