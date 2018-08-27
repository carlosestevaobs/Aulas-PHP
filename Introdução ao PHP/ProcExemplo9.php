<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$usuarioReal = "admin";
$senhaReal = "admin";
if ($usuario == $usuarioReal and 
$senha == $senhaReal) {
    header("Location: exemplo9Logou.php");
} else {
    header("Location: exemplo9.php?erro=1");
}
?>