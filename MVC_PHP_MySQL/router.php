<?php

//echo $controller;
//echo $action;

include_once("Controller/".$controller."Controller.php");
//ucfirst - deixar a primeira letra maiúscula
$objController = ucfirst($controller)."Controller";
$controller = new $objController;
$controller->$action();

?>