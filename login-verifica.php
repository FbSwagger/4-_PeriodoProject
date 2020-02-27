<?php
   
    include_once('conexao.php');
   
   

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "select * from matriculados where email_participante = '{$email}' and senha_participante = md5('{$senha}')";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);


    if($row == 1){
        session_start();
        
          
    
          
      
      header('Location:user.php');
     
        
         
        
    }elseif ($row == 0) {
       header('Location:login.php');
    };
       

?>