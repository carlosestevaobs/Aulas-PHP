<?php
$nome1 = $_GET['nome1'];
$nome2 = $_GET['nome2'];
$idade1 = $_GET['idade1'];
$idade2 = $_GET['idade2'];

if ($idade1 > $idade2) {
    echo "O mais velho é <b> ".$nome1. " </b> e o mais novo é  <b> ". $nome2. "</b>";
} else {
    echo "O mais velho é <b> ".$nome2. " </b> e o mais novo é <b> ". $nome1." </b>";
}


?>