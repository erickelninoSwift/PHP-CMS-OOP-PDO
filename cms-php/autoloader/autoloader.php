<?php 
spl_autoload_register(function($class_name){
    // directory
    $directory = __DIR__ ."/../classes/";
    $file = $directory . $class_name . ".php";
    if (file_exists($file)) {
        require_once $file;
    }else {
         die('Class wass not found in the Classes Directory');
    }
});