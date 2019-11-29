<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/criar-evento2.css"> 
        <script href="./js/main.js"></script>
</head>
<body>

        <nav id="nav-bar">
            <a href="http://localhost/projeto/"><img id="logo" src="img/logo.png"></a>
        </nav>
    <div class="box effect1">  
         

        <form class="box2" action="evento-bd.php" method="POST"> 
            
            <label for="nome_cad" class="label">Dados pessoais:</label><br>
            <input id="nome_cad" name="nome_user" placeholder="Nome completo:"  type="text"  /> 
            <input id="tefone_cad" name="telefone_user" placeholder="Telefone:" type="tel"  /> 
            <input id="email_cad" name="email_email" placeholder="Email:"  type="email"  /> 
           
            <div class="butoes">
                    <button href="http://localhost/projeto/criar-evento.php" class="btn">Voltar</button>
                    <input  type="submit" class="btn" value="Criar evento" /> 
            </div>
            

            
        </form> 
    </div>
</body>
</html>