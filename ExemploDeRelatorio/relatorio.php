<?php
    require "vendor/dompdf/autoload.inc.php";
    include "conexao.php";
    $dompdf = new Dompdf\Dompdf();
    use Dompdf\Options;

    $options = new Options();
    $options->setIsRemoteEnabled(true);
    $dompdf->setOptions($options);

    $html = "<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>
    <body> <table>
     ";
 
     $sql = "Select * from tb_aluno";
    $pesquisar = mysqli_query($conexao, $sql);
    			
        while ($vetor = $pesquisar->fetch_assoc()) {	
            $variavel = $vetor['alu_nome'];
            $html .= "<tr><td>".$variavel."</td></tr>";
        } 
   
 

    $html .= "</table></body>
    </html>";

    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4','portrait');
    $dompdf->render();
    $dompdf->stream("relatorio", array("Attachment"=>false));




?>