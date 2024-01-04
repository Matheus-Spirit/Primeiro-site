<?php

header("Content-type:text/html; charset=utf8");

require_once "Classes/Alunos.php";

$Alunos = new Alunos();

If(isset($_POST["salvar"])){
    
    $Alunos->inserir();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="index.html">Entrar</a></li>
        <li><a href="index1.html">Resgistre-se</a></li>
        <li><a href="#">Contatos</a></li>
        <li style="float:right"><a class="active" href="#">Sobre nos</a></li>
      </ul>
   <div class="login">
    <div class="caixinha">
        <h1> Resgistre-se</h1>
         <form action="" method="post">
            <div class="form-group">
               <label for="nome">Nome</label>
               <input type="text" id="nome" name="nome" class="form-control" required>
            </div>

            <div class = "form-group col-lg-3">
                <label for = "sexo">Sexo</label>
            <select name = "sexo" class="form-control">
                <option value = ""> </option>
                <option value = "Masculino">Masculino</option>
                <option value = "Feminino">Feminino</option>
                <option value = "Outros">Outro</option>
            </select>

            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div> 

            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco" class="form-control" required>
            </div> 

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone" class="form-control" required>
            </div> 

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" required>
            </div> 
            
            <div>
                <button class="btn btn-success" type="submit" name="Salvar">Salvar</button></a>
                <a  class="btn btn-outline-danger" href="index.html">Cancelar</a>
            
            </div>   

         </form>
     </div>
    </div> 
</body>
</html>
