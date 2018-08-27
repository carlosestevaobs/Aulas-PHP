<html>
    <head></head>
    <body>
    <?php
        if (isset($_GET['erro'])) {
            echo "<font color='red'> Credenciais incorretas, tente novamente. </font>";
        }
    ?>


        <center>
            <form method="POST" action="ProcExemplo9.php">
                <input type="text" name="usuario" placeholder="Usuário"> <br> <br>
                <input type="password" name="senha" placeholder="Senha"> <br> <br>
                <input type="submit" value="Entrar"> &nbsp; 
                <input type="reset" value="Cancelar">                            
            </form>
        </center>
    </body>
</html>