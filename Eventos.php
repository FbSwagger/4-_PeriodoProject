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
        <a href="https://eventopi.herokuapp.com/"><img id="logo" src="./img/EVENTOPI.png"></a>
        <ul id="menu">
            <li><a href="https://eventopi.herokuapp.com/">Home</a></li>
            <li><a href="https://eventopi.herokuapp.com/Eventos.php">Eventos</a></li>
           
            <li><a href="#">Ajuda</a></li>
            <li><a href="https://eventopi.herokuapp.com/criar-evento.php">Criar eventos</a></li>
           
            <li>
              <a class="btn" href="https://eventopi.herokuapp.com/cadastro-usuario.php">Cadastre-se</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <h2 id="text-atividade">Eventos:</h2><br><br>
   </div>
   <div>
   <?php while($dado = $con->fetch_array()){?>
           <form action="matricula.php"  method="POST">
                <img id="img-evento" src="img/WORK.jpg "  >
                <br>
                <h1 id="h2-form"><?php echo $dado["nome_evento"] ?></h1>
                <h3 id="h2-form">Organizador: <?php echo $dado["nome_user"] ?></h3>
               
                <input type="submit" class="btn btn-form" value="Participar" name="botao-login">
                
            </form>
            <br>
                                                    
                                           
    <?php } ?>   
            
    <br>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    


            
        
                

    <footer>
		<p>Todos os direitos reservados</p>
	</footer>

</body>
</html>