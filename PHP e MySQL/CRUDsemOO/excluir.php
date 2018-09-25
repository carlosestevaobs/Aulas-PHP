<?php
include "conexao.php";
$id = $_GET['id'];

$sql = "DELETE FROM tb_professor where pro_id = $id";

$inserir = mysqli_query($conexao, $sql);
echo "<script type='text/javascript'>
 alert('Deletado com sucesso!'); 
 location.href='index.php';
 </script>";
 ?>
