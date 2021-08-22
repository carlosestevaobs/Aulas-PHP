<?php

include_once("Model/FuncionariosModel.php");
include_once("connection.php");
// criar uma instância da conexão

DB::createInstance();

class FuncionariosController{
    public function home(){       
        $funcionarios = FuncionariosModel::consult();
        include_once("View/funcionarios/home.php");
    }

    public function save(){
        if ($_POST) {
            print_r($_POST);
            $nome = $_POST['nome'];
            $cargo = $_POST['cargo'];
            FuncionariosModel::save($nome, $cargo);
            header("Location:./?controller=funcionarios&action=home");
        }
        include_once("View/funcionarios/save.php");
    }

    public function update(){
       //se há um post
        if ($_POST) {
         //  print_r($_POST);
          $codigo = $_POST['codigo'];
          $nome = $_POST['nome'];
          $cargo = $_POST['cargo'];
          FuncionariosModel::update($codigo, $nome, $cargo);
          header("Location:./?controller=funcionarios&action=home");
        }
        $codigo = $_GET['codigo'];
        $funcionario = FuncionariosModel::search($codigo);

        include_once("View/funcionarios/update.php");
    }

    public function delete() {
          //  print_r($_GET);
          $codigo = $_GET['codigo'];
          FuncionariosModel::delete($codigo);
          header("Location:./?controller=funcionarios&action=home");
    } 



}


?>