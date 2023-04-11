<?php
    /**Session starts regardless on what page you are on**/
//    session_start();
    
    require "../app/core/init.php";
    
    $app = new App;
    $app->loadController();
