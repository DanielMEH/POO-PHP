<?php

require_once("autoload.php");

$object= new usuario();

// $datosInsert=$object->setInsertFact("daniel",19,334455);
// echo $datosInsert;

$select= $object->getMostrarDatos();
print_r('<pre>');
print_r($select);


?>