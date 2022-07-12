<?php


require_once("cliente.php");

$userNew= new cliente(10205023650,"fernanda",18);
$userNew->setNombreDelPuesto("empleado");
echo $userNew->userDate();
echo $userNew->getDatosDelPuesto()

 
?>