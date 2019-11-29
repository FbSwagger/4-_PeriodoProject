<?php
include_once('conexao.php');
$nome_atividade = filter_input(INPUT_POST,'nome-atividade', FILTER_SANITIZE_STRING);
$tipo_atividade = filter_input(INPUT_POST, 'tipo-atividade', FILTER_SANITIZE_STRING);
$atividade_valor = filter_input(INPUT_POST, 'atividade-valor', FILTER_SANITIZE_STRING);
$atividade_duracao = filter_input(INPUT_POST, 'atividade-duracao', FILTER_SANITIZE_STRING);

$query = "INSERT INTO atividades (nome_atividade, tipo_atividade,status_valor, duracao_atividade) VALUES ('{$nome_atividade}', '{$tipo_atividade}', '{$atividade_valor}', '{$atividade_duracao}')"; 
    $resultado = mysqli_query($conexao, $query);
    header('Location:painel.php');
?>

