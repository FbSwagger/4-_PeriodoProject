<?php

  include_once "conexao.php";
   // $id =  $_POST ["id"];
    $valordesconto =  filter_input(INPUT_POST,'valordesconto', FILTER_SANITIZE_STRING);
    $quantidade_cupom =    filter_input(INPUT_POST,'quantidade_cupom', FILTER_SANITIZE_STRING);
    $data_de_validade =     filter_input(INPUT_POST,'data_de_validade', FILTER_SANITIZE_STRING);

   $query = " INSERT INTO cupom(valordesconto,quantidade_cupom,data_de_validade)VALUES( '{$valordesconto}', '{$quantidade_cupom}', '{$data_de_validade} ')";

   $result = mysqli_query($conexao,$query);
   header('Location:cupom.php');



?>