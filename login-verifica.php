<?php
    include('conexao.php');
    
    
    session_start();

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "select * from usuarios where email = '{$email}' and senha = md5('{$senha}')";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);


    if($row == 1){
       
         header('Location: painel.php');
         session_start();
         $_SESSION["a"] = "Logado";
         
         
        exit();
    }elseif ($row == 0) {
       header('Location:login.php');
        
    };
    
   
    
   
    

?>