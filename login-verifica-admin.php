<?php
   
    include_once('conexao.php');
   
   

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "SELECT * FROM 'admin' where nome = '{$nome}' and senha = '{$senha}')";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);


    if($row == 0){
        session_start();
        
          
    
          
      
      header('Location:painel.php');
     
        
         
        
    }elseif ($row == 1) {
       header('Location:Login-admin.php');
    };
       

?>