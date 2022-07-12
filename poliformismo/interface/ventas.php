<?php

require_once("classTienda.php");

$tienda = new Tienda();
$producto="computador";
$numero= 20000;
$precio = $numero;
$sotk= 9;
$tienda->setProductos($producto,$precio,$sotk);
$tienda->carrito("tenis",3);

echo $tienda->getProductos();
echo "<hr>";
$tienda->setStock(4);
echo $tienda->getProductos();
  echo $tienda->setCarrito()

?>