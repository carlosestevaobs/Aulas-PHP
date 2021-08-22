<?php

class FuncionariosModel {
    public $codigo;
    public $nome;
    public $cargo;

    public function __construct($codigo, $nome, $cargo) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

    public static function consult(){
        $FuncionariosList = [];
        $connectionDB = DB::createInstance();
        $sql = $connectionDB->query("Select * from tb_funcionario");

        foreach($sql->fetchAll() as $funcionario) {
            $FuncionariosList[] = new FuncionariosModel($funcionario['fun_id'], $funcionario['fun_nome'], $funcionario['fun_cargo']);
        }
       return $FuncionariosList;
    }
    
    public static function save($nome, $cargo) {
        $connectionDB = DB::createInstance();
        $sql = $connectionDB->prepare("INSERT INTO tb_funcionario(fun_nome, fun_cargo) VALUES (?, ?)");
        $sql->execute(array($nome, $cargo)); 
    }

    public static function delete($codigo) {
        $connectionDB = DB::createInstance();
        $sql = $connectionDB->prepare("DELETE FROM tb_funcionario where fun_id = ?");
        $sql->execute(array($codigo)); 
    }

    public static function search($codigo) {
        $connectionDB = DB::createInstance();
        $sql = $connectionDB->prepare("SELECT * FROM tb_funcionario where fun_id = ?");
        $sql->execute(array($codigo)); 
        $funcionario = $sql->fetch();
        return new FuncionariosModel($funcionario['fun_id'], $funcionario['fun_nome'], $funcionario['fun_cargo']);
    }

    public static function update($codigo, $nome, $cargo){
        $connectionDB = DB::createInstance();
        $sql = $connectionDB->prepare("UPDATE tb_funcionario SET fun_nome = ?, fun_cargo = ? WHERE fun_id = ?");
        $sql->execute(array($nome, $cargo, $codigo)); 

    }

    
}


?>