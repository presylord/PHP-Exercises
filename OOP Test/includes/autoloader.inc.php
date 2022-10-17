<?php 
spl_autoload_register('myAutoloader');

function myAutoloader($className){
    $path = "classes/";
    $ext = ".class.php";
    $fullPath = $path . $className . $ext;
    
    if (!file_exists($fullPath)){
        // echo $className . " does not exist";
        return false;

    }

    include_once $fullPath;
}

