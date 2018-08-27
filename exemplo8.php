<?php   
    if (isset($_GET['nome']) && isset($_GET['data']) && isset($_GET['cor'])) {
        $nome = $_GET['nome'];
        $data = $_GET['data'];
        $cor = $_GET['cor'];
    }    
?>
<html>
<head>
<link rel="stylesheet" content="text/css">
<style>
body {
    background-color: <?php echo $cor; ?>;
    }
</style>
</head>
<body>
    <form method="GET" action="#">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" placeholder="Digite seu nome"></td>
            </tr>
            <tr>
                <td>Data de Nascimento:</td>
                <td><input type="date" name="data"> </td>
            </tr>
            <tr>
                <td> Cor do background: </td>
                <td> <input type="color" name="cor"/> </td>
            </tr>
            <tr>
                <td colspan="2"> 
                <center> <input type="submit" value="Enviar dados"> </center>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>