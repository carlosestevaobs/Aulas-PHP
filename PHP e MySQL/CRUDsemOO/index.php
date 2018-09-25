<?php
include "conexao.php";
if (isset($_GET['id'])) {
    $endereco = "editar.php";
    $botao = "Editar";
    $sql = "SELECT * FROM tb_professor where pro_id = ".$_GET['id'];
        $pesquisar = mysqli_query($conexao, $sql);
          $vetor = $pesquisar->fetch_assoc(); 
           $id = $vetor['pro_id'];
            $nome = $vetor['pro_nome'];
            $senha = $vetor['pro_senha'];
          
} else {
    $endereco = "salvar.php";
    $botao = "Salvar";
    $id = null;
    $nome = null;
    $senha = null;
}
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>        
    <div id="cadastro">
    <h1> Cadastro de Usuarios</h1>
        <form method="POST" action="<?php echo $endereco;?>">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="text" name="usuario" placeholder="usuário" value="<?php echo $nome;?>"> <br/> <br/>
            <input type="password" name="senha" placeholder="senha" value="<?php echo $senha;?>"><br/><br/>
            <input type="submit" value="<?php echo $botao;?>">        
            <input type="reset" value="Limpar">        
        </form>
    </div>
    <div id="pesquisa">        
        <h1> Dados </h1>        
        <form method="GET" action="index.php">
            <input type="text" name="pesquisa" placeholder="Digite aqui"> <br>
            <input type="radio" name="tipo" value="0"> Código <br>
            <input type="radio" name="tipo" value="1" checked> Usuário <br>
            <input type="submit" value="Pesquisar">
        </form>
        <?php  
        if (isset($_GET['pesquisa'])) {
            if ($_GET['tipo'] == 1) {
                $sql = "SELECT * FROM tb_professor where pro_nome like '%".$_GET['pesquisa']."%' order by pro_id asc;";
            } else {                
                $numerica = is_numeric($_GET['pesquisa']);

                if ($numerica == 1) {
                $sql = "SELECT * FROM tb_professor where pro_id = ".$_GET['pesquisa'].";";
                }
                else {
                    echo "O valor digitado não é um número. Retornamos todos os registros";
                    $sql = "SELECT * FROM tb_professor order by pro_id asc;";
                }
            }
        } else {
            $sql = "SELECT * FROM tb_professor order by pro_id asc;";
        }   
        $pesquisar = mysqli_query($conexao, $sql);
        $quantidade = mysqli_num_rows($pesquisar);
       if ($quantidade > 0) {
        echo " <table >"
        . "<tr><td bgcolor='GreenYellow'> <b> Usuário </b> </td>"
        . "<td bgcolor='GreenYellow'> <b> Senha </b> </td>"
        . "<td bgcolor='GreenYellow'> <b> Editar </b> </td>"
        . "<td bgcolor='GreenYellow'> <b> Excluir </b> </td></tr>";

        while ($linha = $pesquisar->fetch_assoc()) {
            echo "<tr><td>".$linha['pro_nome']."</td>"
                    . "<td>".$linha['pro_senha']."</td>"
                    ."<td><a href='index.php?id=".$linha['pro_id']."'><img src='imagens/editar.png' ></a></td>"
                    ."<td><a href='excluir.php?id=".$linha['pro_id']."'><img src='imagens/excluir.png' ></a></td>";
        }
        echo "</table>";
    } else {
        echo "Nenhum dado encontrado";
    } ?>
    </div>
    </body>
</html>