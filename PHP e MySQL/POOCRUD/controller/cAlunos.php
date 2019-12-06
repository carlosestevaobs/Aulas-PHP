<?php

require_once("../model/mAlunos.php");
require_once("../model/conexao.php");

class cAlunos {
	private $aluno;

	public function __construct() {
		$this->aluno = new mAlunos(null, null); 
	}

	public function Inserir($nome) {
		$con = new conexao();
		$this->aluno->setNome($nome);
		$query = "INSERT INTO tb_aluno(alu_nome) VALUES ('".$this->aluno->getNome()."')";
		$con->executar($query);
		$con->desconectar();
	}

	public function Pesquisar($nome) {
		$con = new conexao();
		if (isset($nome)) {
			$query = "Select * from tb_aluno where alu_nome like '%$nome%'";
		} else {
			$query = "Select * from tb_aluno";
		}
		$sql = $con->executar($query);
		$con->desconectar();
		return $sql;
	}
	
}



?>
