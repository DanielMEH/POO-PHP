<?php

require_once("operacion.php");

require_once "clasaoperacion.php";

// ?Definir productos

class Tienda
{

    use producto, carrito;
    public $totalfil=0;

    public function setCarrito(){
        $this->totalfil=$this->fltPrecio * $this->cantidad;
        $inforCarrito="
        <h1>Carrito</h1>
        <hr>
        Producto: {$this->strProducto}<br>
        Cantidad: {$this->cantidad}<br>
        Precio: {$this->fltPrecio}<br>
        Total: {$this->totalfil}<br>
        
        ";
        return $inforCarrito;

    }
}
?>