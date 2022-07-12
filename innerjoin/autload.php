
<?php

 function autoload($class){

    require_once($class. ".php");
 }

 spl_autoload_register('autoload');