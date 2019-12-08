<?php

  include_once "connect.php";
   // $id =  $_POST ["id"];
    $valordesconto =  $_POST["valordesconto"];
    $Quantidade_cupom =    $_POST["Quantidade_cupom"];
    $data_de_validade =     $_POST["data_de_validade"];

   $query = " INSERT INTO cupom({valordesconto},{quantidade_cupom} ,{data_de_validade})VALUES( '$valordesconto', '$quantidade_cupom', '$data_de_validade')";

   $query = mysqli_query($connect,$conexao);



?>