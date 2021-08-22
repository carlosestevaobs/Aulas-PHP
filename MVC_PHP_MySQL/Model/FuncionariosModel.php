<?php

class FuncionariosModel {
    public static function save($nome, $cargo) {
        $connectionDB = DB::createInstance();
        $sql = $connectionDB->prepare("INSERT INTO tb_funcionario(fun_nome, fun_cargo) VALUES (?, ?)");
        $sql->execute(array($nome, $cargo)); 
    }
}


?>