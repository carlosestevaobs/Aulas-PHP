<?php
session_start();
if (isset($_SESSION['jogada']) )  {
$_SESSION['jogada'] = $_SESSION['jogada'] + 1;
echo $_SESSION['jogada'];
} else {
    $_SESSION['jogada'] = 0;
}
?>
<html>
<head>
<style type="text/css">
    .imagemJogo {
        opacity: 0.3;
    }
    .imagemJogo:hover {
        opacity: 1;
    }
</style>
</head>
<body>
<table>
<tr>
    <th>
        <a href="index.php?jogada=<?php echo $_SESSION['jogada'];?>">
        <?php
        if (isset($_SESSION['botao1'])) {
            echo "<img src='imagens/jogador1.gif' class='imagemJogo'>";
        }   else {
            echo "<img src='imagens/naojogado.png' class='imagemJogo'>";
        
        }  
        ?>
            
    </a>
    </th>
    <th><img src="imagens/naojogado.png" class="imagemJogo"></th>
    <th><img src="imagens/naojogado.png" class="imagemJogo"></th>
</tr>
<tr>
    <th><img src="imagens/naojogado.png" class="imagemJogo"></th>
    <th><img src="imagens/naojogado.png" class="imagemJogo"></th>
    <th><img src="imagens/naojogado.png" class="imagemJogo"></th>
</tr>
<tr>
    <th><img src="imagens/naojogado.png" class="imagemJogo"></th>
    <th><img src="imagens/naojogado.png" class="imagemJogo"></th>
    <th><img src="imagens/naojogado.png" class="imagemJogo"></th>
</tr>

</table>
</body>
</html>