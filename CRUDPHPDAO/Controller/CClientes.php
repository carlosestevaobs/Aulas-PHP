<?php

include "../Model/MClientes.php";
include "../DAO/DClientes.php";

class CClientes {
    public static function salvarCliente($dadosCliente){
        $cliente = new MClientes($dadosCliente['codigo'], $dadosCliente['nome'], $dadosCliente['cpf']);
        DClientes::salvarClientes($cliente->getNome(), $cliente->getCpf());
        $cliente = null;
        header("location: ../View/index.php"); 
    }

    public static function editarCliente($dadosCliente){
        $cliente = new MClientes($dadosCliente['codigo'], $dadosCliente['nome'], $dadosCliente['cpf']);
        DClientes::editarClientes($cliente->getCodigo(), $cliente->getNome(), $cliente->getCpf());
        $cliente = null;
        header("location: ../View/index.php"); 
    }

    public static function retornarClientes(){
        $clientes = DClientes::carregarClientes();    
        return $clientes;
    }  

    public static function excluirCliente($codigo){
        DClientes::excluirClientes($codigo);       
        header("location: ../View/index.php"); 
    }

}


?>