<?php

//echo $controller;
//echo $action;

include_once("Controller/".$controller."Controller.php");

$objController = ucfirst($controller)."Controller";
$controller = new $objController;
$controller->$action();

?>