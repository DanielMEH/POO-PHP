<?php

require_once("conexion.php");

$name= $_POST['nombre'];
$namelst= $_POST['lastname'];

$sql ="INSERT INTO user(nombre,apellido) VALUES ('$name','$namelst')";
$sqls= $conexion->query($sql);
if ($sql) {
    echo "datos registrados";
    
}else{

    echo "error fatal";
}


?>