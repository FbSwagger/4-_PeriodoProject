<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Stylesheet" type="Text/css" href="css/estilo-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    
    <title>Acesse sua conta</title>
</head>
<body>
    <nav id="nav-bar">
        <a href="http://localhost/projeto/"><img id="logo" src="./img/download.png"></a>
        <a class="btn" href="#">Cadastre-se</a>
    </nav>
    <div class="container">
        <div>
            
            <img id="svg-login" src="img/login2.svg" >
        </div>
        <div>
            <form>
                <h1 id="h2-form">Bem vindo!</h1>
                <h3 id="h2-form">Acesse sua conta</h3>
                <button class="btn-facebook"><i class="fa fa-facebook-square icon"></i><strong>Login </strong>com o <strong>facebook</strong></button>
                <input id="email"class="input-form" type="email" placeholder="Email:" name="email" required>
                <input  class="input-form" type="password" placeholder="Senha:" name="senha" required>
                <input type="submit" class="btn btn-form" value="Entrar" name="botao-login">
                <span><a id="esqueceu-senha" href="#">Esqueceu sua senha?</a></span>
            </form>
            
        </div>

    </div>
    
</body>
</html>