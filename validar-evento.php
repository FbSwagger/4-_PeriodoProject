<?php
    include_once('conexao.php');
    
    $nome_evento = filter_input(INPUT_POST,'nome_evento', FILTER_SANITIZE_STRING);
    $quant_evento =  filter_input(INPUT_POST,'select-campo', FILTER_SANITIZE_STRING);
    $nome_user =  filter_input(INPUT_POST,'nome_user', FILTER_SANITIZE_STRING);
    $email_user =  filter_input(INPUT_POST,'email_user', FILTER_SANITIZE_STRING);
    $telefone_user =  filter_input(INPUT_POST,'telefone_user', FILTER_SANITIZE_STRING);
    echo($quant_evento);
    $query = "INSERT INTO eventos (nome_evento, quant_participantes, nome_user,telefone, email) VALUES ('{$nome_evento}', '{$quant_evento}', '{$nome_user}', '{$telefone_user}', '{$email_user}')"; 
    $resultado = mysqli_query($conexao, $query);
    header('Location:login.php');

?>  





