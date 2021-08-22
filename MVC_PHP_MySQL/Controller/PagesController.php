<?php
    
class PagesController {
    public function home(){
        include_once("View/pages/home.php");
    } 

    public function error(){
        include_once("View/pages/error.php");
    }
}

?>