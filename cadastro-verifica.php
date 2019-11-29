<?php
    include_once('conexao.php');
    if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha'])){
        header('Location: cadastro-usuario.php');
        exit();
    }

    $nome_cadastro = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
    $email_cadastro =  filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
    $senha_cadastro =  filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);
    
    $result_usuario = "INSERT INTO usuarios (nome, email, senha) VALUES ('{$nome_cadastro}', '{$email_cadastro}', md5('{$senha_cadastro}'))"; 
    $resultado = mysqli_query($conexao, $result_usuario);
    header('Location:login.php');

    



    
    

    





