<?php
include "conexao.php";

$pes_id = $_GET['pessoa'];
$aut_id = $_GET['veiculo'];

$query = "UPDATE automovel set pes_id = $pes_id where aut_id = $aut_id";
$sql = mysqli_query($conexao, $query);

header("Location: ../index.php");


?>
