<?php

include_once("Model/FuncionariosModel.php");

include_once("connection.php");
// criar uma instância da conexão


DB::createInstance();

class FuncionariosController{
    public function home(){
        include_once("View/funcionarios/home.php");
    }

    public function save(){
        if ($_POST) {
            print_r($_POST);
            $nome = $_POST['nome'];
            $cargo = $_POST['cargo'];
            FuncionariosModel::save($nome, $cargo);
        }
        include_once("View/funcionarios/save.php");
    }

    public function update(){
        include_once("View/funcionarios/update.php");
    }



}


?>