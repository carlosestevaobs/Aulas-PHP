<?php
include "conexao.php";
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$sql = "INSERT INTO tb_professor"
        . "(pro_nome, pro_senha) VALUES "
        . "('$usuario', '$senha')";
$inserir = mysqli_query($conexao, $sql);
echo "<script type='text/javascript'>
 alert('Salvo com sucesso!'); 
 location.href='index.php';
 </script>";
 ?>
