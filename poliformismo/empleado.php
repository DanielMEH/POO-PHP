
<?php
 
require_once("claseProducto.php");

  class Empleado extends personast
  {

    public $puesto;
    public $horas;
    static $strEstado="Activo";

    public  function __construct(string $name, string $profesionstr, int $telefonoInt, int $eDad, string $puestostr, int $Inthoras)
    {
    
        parent::__construct($name, $profesionstr, $telefonoInt, $eDad);
        $this->puesto=$puestostr;
        $this->horas=$Inthoras;

    }

    public function personsDate()
    {
        $datosPersona = array(
            
            "Nombre: " => $this->nombre,
            "profesión: " => $this->profesion,
            "teléfono:" => $this->telefono,
            "edad: " => $this->edad,
            "Puesto: " => $this->puesto,
            "Horas: " => $this->horas,
            "Estado: " => self::$strEstado

        );
        return $datosPersona;
    }

    

  }
?>