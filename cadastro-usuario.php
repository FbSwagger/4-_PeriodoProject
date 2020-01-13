<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Stylesheet" type="Text/css" href="css/estilo-cadastro.css">
    <link rel="shortcut icon"  href="img/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    
    <title>Acesse sua conta</title>
</head>
<body>
    <nav id="nav-bar">
        <a href="http://localhost/4-_PeriodoProject/"><img id="logo" src="./img/EVENTOPI.png"></a>
        <ul id="menu">
            <li><a href="http://localhost/4-_PeriodoProject/">Home</a></li>
            <li><a href="http://localhost/4-_PeriodoProject/Eventos.php">Eventos</a></li>
            <li><a href="#">Publicações</a></li>
            <li><a href="#">Ajuda</a></li>
            <li><a href="http://localhost/4-_PeriodoProject/criar-evento.php">Criar eventos</a></li>
            <li>
              <a class="btn" href="http://localhost/4-_PeriodoProject/login.php">Login</a>
            </li>
        </ul>

    </nav>
    <div class="container">
        <div>
            <img id="svg-login" src="./img/login2.svg" >
        </div>
        <div>
            <form action="cadastro-verifica.php" method="POST">
                <h1 id="h2-form">Criar conta</h1>
                <input class="input-form" type="text" placeholder="Nome completo:" autocomplete="off" name="nome" >
                <input  class="input-form" type="email" placeholder="Email Pessoal:" autocomplete="off" name="email" >
                <input  class="input-form" type="password" placeholder="Senha:" name="senha" >
                <input type="submit" class="btn btn-form" value="Criar conta" name="botao-login">
                <span><a id="esqueceu-senha" href="http://localhost/4-_PeriodoProject/login.php">Já possui conta?</a></span>
            </form>
            
        </div>

    </div>
    
</body>
</html>