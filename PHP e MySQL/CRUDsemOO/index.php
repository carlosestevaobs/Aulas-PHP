<?php
include "conexao.php";
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM tb_professor where pro_id = ".$_GET['id'];
        $pesquisar = mysqli_query($conexao, $sql);
          while ($linha = $pesquisar->fetch_assoc()) {
           $id = $linha['pro_id'];
            $nome = $linha['pro_nome'];
            $senha = $linha['pro_senha'];
          }
} else {
    $id = null;
    $nome = null;
    $senha = null;
}
?>
<html>
    <head></head>
    <body>        
        <form method="POST" action="salvar.php">
            <input type="hidden" name="id" value="<?php echo $nome;?>">
            <input type="text" name="usuario" placeholder="usuário" value="<?php echo $nome;?>"> <br/> <br/>
            <input type="password" name="senha" placeholder="senha" value="<?php echo $senha;?>"><br/><br/>
            <input type="submit" value="Salvar">        
            <input type="reset" value="Limpar">        
        </form>
        <?php
        
        $sql = "SELECT * FROM tb_professor order by pro_id asc";
        $pesquisar = mysqli_query($conexao, $sql);
        echo "<h1> Dados </h1> <table >"
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
        ?>
    </body>
</html>