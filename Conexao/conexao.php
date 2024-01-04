<?php

class Conexao

{
private $servidor;
private $banco;
private $usuario;
private $senha;

function __construct(){
    $this->servidor = "localhost";
    $this->banco = "SISTEMA_ESCOLAR";
    $this->usuario = "root";
    $this->senha = "";   
}
public function conectar(){
    try{
        $con = new PDO(dsn:"mysql:host={$this->servidor};dbname={$this->banco};charset=utf8;",$this->usuario,$this->senha);
        ruturn $con;
    }
}catch(PDOExeption $e){

    echo "Erro ao conectar ao banco de dados";

 }
}


?>