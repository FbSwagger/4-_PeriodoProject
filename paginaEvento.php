<!DOCTYPE html>
<html lang="br">
<?php
    include('conexao.php');
     


    $consulta = "SELECT * FROM eventos";
    $con = $conexao->query($consulta) or die($conexao->error);


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon"  href="img/favicon.ico" />
    <link rel="Stylesheet" type="Text/css" href="css/eventos.css">
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <title>Acesse sua conta</title>
</head>
<body>
    <nav id="nav-bar">
        <a href="http://localhost/4-_PeriodoProject/"><img id="logo" src="./img/EVENTOPI.png"></a>
        <ul id="menu">
            <li><a href="http://localhost/4-_PeriodoProject
            
            /">Home</a></li>
            <li><a href="http://localhost/4-_PeriodoProject/Eventos.php">Eventos</a></li>
           
            <li><a href="#">Ajuda</a></li>
            <li><a href="http://localhost/4-_PeriodoProject/criar-evento.php">Criar eventos</a></li>
           
            <li>
              <a class="btn" href="http://localhost/4-_PeriodoProject/cadastro-usuario.php">Cadastre-se</a>
            </li>
        </ul>
    </nav>
    <?php while($dado = $con->fetch_array()){?>
         
       <br>
        <form action="boletophp-master/boleto_bb.php" method="POST">

               <h2>Preencha os campos para fazer sua inscrição no evento: <?php echo $dado["nome_evento"] ?></h2>
               
                <input id="email"class="input-form" type="text" placeholder="Nome Completo:" name="nome" autocomplete="off" required >
                <input  class="input-form" type="email" placeholder="E-mail válido:" name="email" required>
                <input  class="input-form" type="text" placeholder="Telefone:" name="telefone" required>
                <input  class="input-form" type="text" placeholder="CPF:" name="cpf" required>
                <input type="submit" class="btn btn-form" value="Participar" name="botao-login">
              
            </form>
              
                
         
            <br>
                                                    
                                           
    <?php } ?>   
    
            
   
        
                

    <footer>
		<p>Todos os direitos reservados</p>
	</footer>

</body>
</html>