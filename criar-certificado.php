<?php

include_once('conexao.php');


$titulo_certificado = filter_input(INPUT_POST,'nome-certificado', FILTER_SANITIZE_STRING);
$tipo_pessoa = filter_input(INPUT_POST, 'tipo-pessoa', FILTER_SANITIZE_STRING);
$modelo = filter_input(INPUT_POST,'tipo-modelo', FILTER_SANITIZE_STRING);



$query = "INSERT INTO certificados (titulo_certificado, tipo_pessoa, modelo) VALUES ('{$titulo_certificado}', '{$tipo_pessoa}', '{$modelo}')"; 
    $resultado = mysqli_query($conexao, $query);
    header('Location: criar-certificado.php');
    

?>




