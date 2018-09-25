<?php
include "conexao.php";
$id = $_POST['id'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "UPDATE tb_professor SET pro_nome = '$usuario', pro_senha = '$senha' where pro_id = $id";

$inserir = mysqli_query($conexao, $sql);
echo "<script type='text/javascript'>
 alert('Atualizado com sucesso!'); 
 location.href='index.php';
 </script>";
 ?>
