<?php
    include('conexao.php');
    $nome_participante = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
    $email_participante = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha_participante = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $telefone_participante = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $cpf_participante = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $query = "INSERT INTO matriculados (nome_participante,email_participante, senha_participante,telefone_participante,cpf_participante) VALUES ('{$nome_participante}', '{$email_participante}', md5('{$senha_participante}'), '{$telefone_participante}','{$cpf_participante}')"; 
        $resultado = mysqli_query($conexao, $query);
        header('Location:login.php');




     
?>

