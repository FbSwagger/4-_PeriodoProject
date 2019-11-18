<?php

include('conexao.php');

$nome_evento = mysqli_real_escape_string($conexao, $_POST['nome-evento']);
$radio1 = mysqli_real_escape_string($conexao, $_POST['select-campo']);


header('Location: criar-evento2.php');


$nome_completo = mysqli_real_escape_string($conexao, $_POST['nome_user']);



?>