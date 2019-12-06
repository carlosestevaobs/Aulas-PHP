<?php
require_once('../controller/cAlunos.php');

$c_aluno = new cAlunos();
if (isset($_POST['nome'])) {
	$c_aluno->Inserir($_POST['nome']);
}
?>

<html>
<head></head>
<body>
<form action="#" method="POST">
Nome: <input type="text" name="nome"> <br>
<input type="submit" value="Enviar">
</form>

<h3> Dados salvos</h3>
<?php
$sql = $c_aluno->Pesquisar(null);

while ($dados = mysqli_fetch_assoc($sql)) {
	echo $dados['alu_nome']. "<br>";

}


?>

</body>
</html>


