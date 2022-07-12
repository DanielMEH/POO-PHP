<?php

 trait producto
 {
     public $strProducto;
     public $fltPrecio;
     public $intStrok;

     public function setProductos(string $producto, float $precio, int $strok)
     {

        $this->strProducto=$producto;
        $this->fltPrecio = $precio;
        $this->intStrok = $strok;

     }
    public  function getProductos():string{

        $producto="
        
        producto: {$this->strProducto} <br>
        precio: {$this->fltPrecio} <br>
        Stok: {$this->intStrok} <br>
        
        ";
        return $producto;
     }
     public function setStock(int $cantidad)
     {

         $this->intStrok=  $this->intStrok - $cantidad;
     }
 }


?>