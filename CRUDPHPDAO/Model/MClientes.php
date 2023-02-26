<?php
class MClientes {
    private $codigo;
    private $nome;
    private $cpf;

    public function __construct($codigo, $nome, $cpf)
    {
      $this->codigo = $codigo;
      $this->nome = $nome;
      $this->cpf = $cpf;      
    }

    public function __destruct()
    {
        echo "objeto encerrado";
    }

    public function getCodigo(){
        return $this->codigo;

    }  
    
    public function getNome(){
        return $this->nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

}