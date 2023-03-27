<?php
    
    spl_autoload_register(function($classname) {
        
        require $filename = "../app/models/" . ucfirst($classname) . ".php";
    });
    /**every file that is added to core needs to be in init**/
    require 'config.php';
    require 'functions.php';
    require 'Database.php';
    require 'Model.php';
    require 'Controller.php';
    require 'App.php';
