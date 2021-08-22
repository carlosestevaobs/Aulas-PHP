<?php

class DB {
    private static $instance = NULL;
    public static function createInstance(){
        // se não existir conexão, criar uma
        if (!isset(self::$instance)) {
            // notificar em caso de erros de instância
            $optionsPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            // criar a instância
            self::$instance = new PDO('mysql:host=localhost;dbname=testeprep;charset=utf8','root', '', $optionsPDO);
//            echo "conexão realizada com sucesso!";

        }

        return self::$instance;
    }

}


?>