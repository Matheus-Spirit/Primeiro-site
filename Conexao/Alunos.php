<?php

require_once "conexao.php";
class alunos
{

public $MATRICULA;
public $NOME;
public $SENHA;
public $EMAIL;
public $ENDERECO;
public $TELEFONE;
public $SENHA;

public function listartodos(){
    try{
        $bd = new conexao();

        $con = $bd->conectar(); 

        $sql = $con->prepare("select * from alunos");

        $sql->execute();

        If($sql->rowCount() > 0){
            return $result = $sql->fetcAll(PDO::FETCH_CLASS);

        }
    }
  }catch(PDOExeption $msg){
    echo "Não foi possivel listar os alunos: ".$msg->getMessage();
  }

}
public function inserir(){
  try{
       if(isset($_POST['nome']) && isset($_POST['sexo'])){
        $this->nome = $_POST["nome"];
        $this->sexo = $_POST["sexo"];
        $this->email = $_POST["email"];
        $this->endereco = $_POST["endereco"];
        $this->telefone = $_POST["telefone"];
        $this->senha = $_POST["senha"];

        $bd = new Conexao();

        $con = $bd->conectar();

        $sql = $con->prepare("insert into alunos(matricula,nome,sexo,email,endereco,telefone,senha
        values(null,?,?,?,?,?,?,)");

        $sql->execute(array(
          $this->nome,
          $this->sexo,
          $this->email,
          $this->endereco,
          $this->telefone,
          $this->senha
        ));

        if($sql->rowCount() > 0){
          header("location: index_aluno.php");  
        }
      }else{
        header("location: index_aluno.php");
      } 
    }catch(PDOException $mag){
      echo "Não foi possivel inserir o alunos: ".$mag->getMassage();
    } 
    
     
  }

?>