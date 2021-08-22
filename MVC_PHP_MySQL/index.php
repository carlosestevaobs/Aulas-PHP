<?php
//bootstrap 5 quick snipppets

$controller = "pages";
$action = "home";

    if (isset($_GET['controller']) && isset($_GET['action'])) {
        if ($_GET['controller'] != "" && $_GET['action'] != "") {
            $controller = $_GET['controller'];
            $action = $_GET['action'];
         //   print_r($controller);
         //   print_r($action);     
        }


       
    }

    require_once("View/template.php");
?>