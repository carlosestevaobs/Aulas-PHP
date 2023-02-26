<?php

include "CClientes.php";

// salvar/editar clientes
if(filter_input(INPUT_GET, "acao") == "salvar" & filter_input(INPUT_GET, "tipo") == "cliente" ) {
    if (filter_input(INPUT_POST, "codigo") != "") {
        CClientes::editarCliente($_POST);  
    } else {
        CClientes::salvarCliente($_POST);  
    }
    
}

// excluir clientes
else if(filter_input(INPUT_GET, "acao") == "excluir" & filter_input(INPUT_GET, "tipo") == "cliente" &  filter_input(INPUT_GET, "codigo") != 0) {
    CClientes::excluirCliente(filter_input(INPUT_GET, "codigo"));  
}

