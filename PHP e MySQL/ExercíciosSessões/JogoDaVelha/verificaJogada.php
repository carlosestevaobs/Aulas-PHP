<?php
session_start();
$_SESSION['botao1'] = $_GET['botao1'];
header("Location: index.php");
?>