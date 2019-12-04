<?php

    include_once('conect.php');
    $codigo = $_POST['codigo'];
   $desconto = $_POST['desconto'];
    $valor = $_POST['valor'];
    $data_de_validade= $_POST['data de validade'];

      $cupom = "INSERT INTO cupom(codigo,desconto,valor,data_de_validade) VALUES('$codigo','$desconto','$valor','$data')";
     $cupom = mysql_query($conn,$cupom)





?>