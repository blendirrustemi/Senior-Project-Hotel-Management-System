<?php
    session_unset();
    require_once  '../app/controller/roomController.php';
    $controller = new roomController();
    $controller->mvcHandler();
?>
