<?php 
session_start();
include "config/config.php";
include "config/array.php";
include "helpers/helper_system.php";
spl_autoload_register(function($class_name){
    include "lib/".$class_name.".php";
});