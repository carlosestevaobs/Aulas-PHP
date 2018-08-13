<?php
$usuario = $_POST['login'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

if ($tipo == "Selecione") {
	Header('Location: Exemplo7_pt1_index.php'); 
}
if ($tipo == "Aluno") {
	if ($usuario == 'aluno' && 
		$senha == 'aluno' ) {
		Header('Location: Exemplo7_pt3_Aluno.php'); 
	} else {
		echo "Usu�rio ou senha incorretos";
	}
}


?>