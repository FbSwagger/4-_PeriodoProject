<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Stylesheet" type="Text/css" href="css/estilo-cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    
    <title>Acesse sua conta</title>
</head>
<body>
    <nav id="nav-bar">
        <a href="http://localhost/projeto/"><img id="logo" src="./img/logo.png"></a>
        
    </nav>
    <div class="container">
        <div>
            <img id="svg-login" src="./img/login2.svg" >
        </div>
        <div>
            <form>
                <h1 id="h2-form">Criar conta</h1>
                <input class="input-form" type="text" placeholder="Nome completo:" name="nome" required>
                <input  class="input-form" type="email" placeholder="Email Pessoal:" name="email" required>
                <input  class="input-form" type="password" placeholder="Senha:" name="senha" required>
                <input type="submit" class="btn btn-form" value="Criar conta" name="botao-login">
                <span><a id="esqueceu-senha" href="http://localhost:3000/login">Já possui conta?</a></span>
            </form>
            
        </div>

    </div>
    
</body>
</html>