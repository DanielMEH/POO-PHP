<?php

   trait carrito
   {
       public $producto;
       public $cantidad;

       public function carrito(string $product, int $amount){

        $this->producto=$product;
        $this->cantidad=$amount;
       }
       abstract function setCarrito();

   }

?>