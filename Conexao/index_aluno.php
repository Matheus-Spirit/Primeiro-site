<?php
header("Content-type:text/html; charset=utf8");

require_once "Classes/alunos.php";

$Alunos = new Alunos;

$listarAlunos = $Alunos->listarTodos();

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
    <div>
         <div>
           <div>
               <h3>Lista de Alunos</h3> 
             </div>     
              <div>
                <button class="btn btn-success">Novo</button>    
              </div>    
           </div>
         </div> 
         
         <table class="table table-dark">
             <thead>
                 <tr>
                     <th>Matricula</th>
                     <th>Nome</th>
                     <th>Endereço</th>
                     <th>Telefone</th>
                     <th></th>
                 </tr> 
             </thead> 
             <tbody>
                 <?php if($listarAlunos) :
                   foreach($listarAlunos as $Alunos):?>
                     <tr>
                         <td><?php echo $aluno->matricila; ?></td> 
                         <td><?php echo $aluno->nome; ?></td>   
                         <td><?php echo $aluno->endereco; ?></td>   
                         <td><?php echo $aluno->telefone; ?></td>   
                         <td>
                             <button class="btn btn-primary"><i class ="fa fa-edit"></i></button> 
                             <button class="btn btn-danger"><i class ="fa fa-trash"></i></button> 
                         </td>  
                     </tr>
                   <?php endforeach;?>  
                   <?php else: ?>  
                     <tr>
                         <td colspan="5">Nunhum aluno cadastrado!!!</td>
                     </tr>
                   <?php endif; ?> 
             </tbody>      
         </table>                      
    </div>
</body>
</html>