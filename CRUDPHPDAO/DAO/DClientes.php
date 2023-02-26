<?php

class DClientes {
    public static function salvarClientes($nome, $cpf){ 
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "INSERT INTO `tb_usuarios` (`usu_codigo`, `usu_nome`, `usu_cpf`) VALUES (NULL, ?, ?);";
        $stmt = $conexaoBD->prepare($sql);
        try {
            $stmt->execute(array($nome, $cpf)); 
           
        } catch (Exception $ex) {
            echo $ex;
            return 0; 
        }
    }

    public static function editarClientes($codigo, $nome, $cpf){ 
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "UPDATE tb_usuarios set usu_nome = ?, usu_cpf = ? where usu_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);
        try {
            $stmt->execute(array($nome, $cpf, $codigo)); 
           
        } catch (Exception $ex) {
            echo $ex;
            return 0; 
        }
    }

    public static function carregarClientes(){ 
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();       
        $sql = "SELECT * FROM `tb_usuarios`;";
        try {
            $stmt = $conexaoBD->query($sql); //statement            
            return $stmt->fetchAll();
        } catch (Exception $ex) {
            echo $ex;
            return 0; 
        }
    }  

    public static function excluirClientes($codigo){ 
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "DELETE FROM tb_usuarios where usu_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);
        try {
            $stmt->execute(array($codigo)); 
           
        } catch (Exception $ex) {
            echo $ex;
            return 0; 
        }
    }
}
?>
