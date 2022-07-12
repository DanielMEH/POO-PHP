<?php

require_once("../config/config.php");
class conexion
{

    public static function connect(){

        $mysqli=new mysqli(DB_HOST,DB_ROOT,DB_PASSWORD,DB_NAME);
        $mysqli->set_charset(DB_CHARSET);
        if (mysqli_connect_errno()) {
            echo DB_ERROR. mysqli_connect_errno();
        }else{

           // ? echo DB_SUCCESS;
        }
        return $mysqli;
    }
}

conexion::connect()


?>