<?php
include "../Controller/CClientes.php";
$listaClientes = CClientes::retornarClientes();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/rotas.php?acao=salvar&tipo=cliente" method="POST">
        <input type="text" name="codigo" value="<?php 
                echo filter_input(INPUT_GET, "codigo");?>" readonly> <br>
        <input type="text" name="nome" value="<?php 
                echo filter_input(INPUT_GET, "nome");?>"> <br>
        <input type="text" name="cpf" value="<?php 
                echo filter_input(INPUT_GET, "cpf");?>"> <br>       
        <input type="submit" value="salvar">
    </form>

    <table>
        <tr> 
            <th>Código</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Editar</th>
            <th>Excluir</th>           
        </tr>
        <?php
            foreach ($listaClientes as $clientes) {
                echo "<tr>
                        <td>".$clientes['usu_codigo']."</td>
                        <td>".$clientes['usu_nome']."</td>
                        <td>".$clientes['usu_cpf']."</td>
                        <td><a href='index.php?codigo=".$clientes['usu_codigo']."&nome=".$clientes['usu_nome']."&cpf=".$clientes['usu_cpf']."'>Editar </a></td>

                        <td><a href='../Controller/rotas.php?acao=excluir&tipo=cliente&codigo=".$clientes['usu_codigo']."'>Excluir </a></td>
                      
                    </tr>";
            }
        ?>
    </table>
</body>
</html>