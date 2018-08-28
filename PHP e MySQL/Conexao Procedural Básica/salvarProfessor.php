<?php
$nome = $_POST['nome'];

include("conexao.php");
$sql = "INSERT INTO tb_professor(pro_nome) VALUES ('$nome')";

$executar = mysqli_query($conexao, $sql) or die(mysqli_error());
?>

<script type="text/javascript">
    alert("Salvo com sucesso");
    location.href="index.php";
</script>