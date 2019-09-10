<?php
include "controle/conexao.php";
?>
<html>
<head></head>
<body>
<form method="GET" action="controle/salvar.php">
Clientes: 
<select name="pessoa">
<?php
$query = "Select * from pessoas";
$sql = mysqli_query($conexao, $query);
while ($dados = mysqli_fetch_assoc($sql)) {
	echo "<option value='".$dados['pes_id']."'>"
		.$dados['pes_nome']. " </option>";
}?></select>
<br> Veículo: <select name="veiculo">
<?php
$query = "Select * from automovel";
$sql = mysqli_query($conexao, $query);
while ($dados = mysqli_fetch_assoc($sql)) {
	echo "<option value='".$dados['aut_id']."'>".$dados['aut_modelo']." </option>";
}

?>
</select>
<input type="submit" value="Realizar Venda">
</form>

<h2>Compras/Vendas </h2>
<?php
$query = "Select pes_nome, aut_modelo from pessoas inner join automovel on pessoas.pes_id = automovel.pes_id where automovel.pes_id != 5";
$sql = mysqli_query($conexao, $query);
while ($dados = mysqli_fetch_assoc($sql)) {
	echo $dados['pes_nome']. " - ". $dados['aut_modelo']."<br>";
}


?>
<h2>Clientes que não compraram </h2>
<?php
$query = "Select pes_nome from pessoas left join automovel on pessoas.pes_id = automovel.pes_id where automovel.pes_id is null";
$sql = mysqli_query($conexao, $query);
while ($dados = mysqli_fetch_assoc($sql)) {
        echo $dados['pes_nome']."<br>";
}

?>


<h2> Veículos da Loja </h2>
<?php
$query = "Select aut_modelo from pessoas inner join automovel on pessoas.pes_id = automovel.pes_id where automovel.pes_id = 5";
$sql = mysqli_query($conexao, $query);
while ($dados = mysqli_fetch_assoc($sql)) {
        echo $dados['aut_modelo']."<br>";
}

?>

</body>
</html>

