<?php
    include('conexao.php');
    $nome_atividade = filter_input(INPUT_POST,'nome-atividade', FILTER_SANITIZE_STRING);
    $tipo_atividade = filter_input(INPUT_POST, 'tipo-atividade', FILTER_SANITIZE_STRING);
    $atividade_status = filter_input(INPUT_POST, 'atividade-status', FILTER_SANITIZE_STRING);
  
    $valor_atividade = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
    $atividade_duracao = filter_input(INPUT_POST, 'atividade-duracao', FILTER_SANITIZE_STRING);

    $atividade_sala = filter_input(INPUT_POST, 'atividade-sala', FILTER_SANITIZE_STRING);

    $atividade_hora = filter_input(INPUT_POST, 'atividade-hora', FILTER_SANITIZE_STRING);
    $atividade_data = filter_input(INPUT_POST, 'atividade-data', FILTER_SANITIZE_STRING);
    $atividade_sala = filter_input(INPUT_POST, 'atividade-sala', FILTER_SANITIZE_STRING);
    $atividade_carga = filter_input(INPUT_POST, 'atividade-carga', FILTER_SANITIZE_STRING);
   
  

    $query = "INSERT INTO atividades (nome_atividade, tipo_atividade,status_valor, duracao_atividade,valor,horario,data_inicio,sala,cargaHoraria) VALUES ('{$nome_atividade}', '{$tipo_atividade}', '{$atividade_status}', '{$atividade_duracao}','{$valor_atividade}','{$atividade_hora}','{$atividade_data}','{$atividade_sala}','{$atividade_carga}')"; 
        $resultado = mysqli_query($conexao, $query);
        header('Location:painel.php');
?>

