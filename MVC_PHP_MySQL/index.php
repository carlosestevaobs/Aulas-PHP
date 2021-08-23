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
        if ($_GET['action'] != "save" && $_GET['action'] != "home" && $_GET['action'] != "update" && $_GET['action'] != "delete") {
            $controller = "pages";
            $action = "home";
        }
    }
 


    require_once("View/template.php");

?>