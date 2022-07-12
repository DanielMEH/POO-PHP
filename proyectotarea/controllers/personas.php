<?php

require_once('../models/personaModelo.php');

$opcion= $_REQUEST['op'];
$objectPersona = new personaModel();

 if ($opcion =="listregistros") {
     $arrayDato= array("status"=> false,"date"=>"");
     $imprimirDatos=$objectPersona->getPersonas();
     if (!empty($imprimirDatos)) {
         $arrayDato['status']= true;
         $arrayDato['date']= $imprimirDatos; 
         echo json_encode($arrayDato);
     }
     
 }

if ($opcion == "registro") {
    echo "registro persona";
    return;
}
if ($opcion == "ver registro") {
    echo "ver persona";
    return;
}
if ($opcion == "actualizar registro") {
    echo "actualizar registro";
    return;
}
if ($opcion == "eliminar registro") {
    echo "eliminar registro";
    return;
}


 echo $opcion;
 die();

?>