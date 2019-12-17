<?php
   
    include_once('conexao.php');
    session_start();
    
    $user_autenticado = false;
    $id_user = null;
    $user_perfil_id = null;

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "select * from usuarios where email = '{$email}' and senha = md5('{$senha}')";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);


    if($row == 1){
    
       $user_autenticado = true;
    
     
       if($user_autenticado){
           $_SESSION['autenticado'] = 'sim';
           $_SESSION['id'] = $usuario['id'];
           header('Location:painel.php');
       }else{
           $_SESSION['autenticado'] = 'nao';
           header('Location: login.php');
       }

        
         
        exit();
    }elseif ($row == 0) {
       header('Location:login.php');
        
    };
    
    
    
?>
    
   
    

?>