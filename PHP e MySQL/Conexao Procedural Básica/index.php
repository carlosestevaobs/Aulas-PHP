<html>
<head></head>
<body>
<form method="POST" action="#" name="form1">
    <select name="tipo">
        <option value="0"> Selecione </option>
        <option value="1"> Professor </option>
        <option value="2"> Aluno </option>
    </select> <br/> <br/>
    <input type="submit" value="Abrir formulário">
</form>
<?php
if (isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    if ($tipo == 0) {
        echo "selecione um tipo";
    } else if ($tipo == 1) {
        include("formProfessor.php");
    } else if ($tipo == 2) {
        include("formAluno.php");
    } else {
        echo "Escolha algo válido";
    }
}
?>
</body>
</html>