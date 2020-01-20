<?php
   
    include_once('conexao.php');
   
   

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "select * from usuarios where email = '{$email}' and senha = md5('{$senha}')";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);


    if($row == 1){
        session_start();
        
          
    
          
      
           header('Location:user.php');
     
        
         
        
    }elseif ($row == 0) {
       header('Location:login.php');
    };
        
        /* substitua as variáveis abaixo pelas que se adequam ao seu caso */
       
        $dbname = 'd3b2dt1titl8vi'; // nome do banco de dados a ser usado
        $conecta = mysql_connect($conexao);
        $seleciona = mysql_select_db($dbnam);
        $sqlcriatabela = "CREATE TABLE `atividades` (
            `id_atividade` int(11) NOT NULL,
            `nome_atividade` varchar(100) NOT NULL,
            `tipo_atividade` varchar(50) NOT NULL,
            `status_valor` varchar(50) NOT NULL,
            `duracao_atividade` int(11) NOT NULL,
            `valor` float NOT NULL
        ) and 
        CREATE TABLE `eventos` (
        `id_evento` int(200) NOT NULL,
        `nome_evento` varchar(100) NOT NULL,
        `quant_participantes` int(255) NOT NULL,
        `nome_user` varchar(100) NOT NULL,
        `telefone` int(11) NOT NULL,
        `email` varchar(100) NOT NULL,
        `atividades` int(11) DEFAULT NULL
        ) and 
        CREATE TABLE `usuarios` (
        `id_usuario` int(200) NOT NULL,
        `nome` varchar(200) NOT NULL,
        `email` varchar(100) NOT NULL,
        `senha` varchar(32) NOT NULL,
        `eventos` int(11) DEFAULT NULL
        ) ";
        $criatabela = mysql_query( $sqlcriatabela, $conecta );

        // inicia a conexao ao servidor de banco de dados
        if(! $conecta )
        {
        die("<br />Nao foi possivel conectar: " . mysql_error());
        }
        echo "<br />Conexao realizada!";

        // seleciona o banco de dados no qual a tabela vai ser criada
        if (! $seleciona)
        {
        die("<br />Nao foi possivel selecionar o banco de dados $dbname");
        }
        echo "<br />selecionado o banco de dados $dbname";

        // finalmente, cria a tabela 
        if(! $criatabela )
        {
        die("<br />Nao foi possivel criar a tabela: " . mysql_error());
        }
        echo "<br />A tabela foi criada!";

        // encerra a conexão
        mysql_close($conecta);
        
   


?>