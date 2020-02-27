<!DOCTYPE html>
    <html>
        <head>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
                <link rel="stylesheet" href="./css/criar-evento.css"> 
                <link rel="shortcut icon"  href="img/favicon.ico" />
                <script src="js/main.js"></script>
        </head>
        <body>

                <nav id="nav-bar">
                    <a href="http://localhost/4-_PeriodoProject/"><img id="logo" src="img/EVENTOPI.png"></a>
                 <ul id="menu">
                    <li><a href="http://localhost/4-_PeriodoProject/">Home</a></li>
                    <li><a href="http://localhost/4-_PeriodoProject/Eventos.php">Eventos</a></li>
                    <li><a href="#">Ajuda</a></li>
                
                    <li>
                    <a class="btn" href="http://localhost/4-_PeriodoProject/cadastro-usuario.php">Cadastre-se</a>
                    </li>
                </ul>
                </nav>
                
                

            <div class="box effect1">  
                 

                <form action="validar-evento.php" method="POST" class="box2" > 
                    
                    <label for="nome_cad" class="input-form"> Nome do evento </label><br>
                    <input id="nome_cad" name="nome_evento" placeholder="Nome do evento:" autocomplete="off" required type="text"  /> 
                    
                    <p>
                    <label> Expectativa de Participantes </label> 
                    </p> 
                    <p>
                    <select id="select" name="select-campo" required>
							<option value="100"> 100  </option> 
                            <option value="300"> 300</option>
                            <option value="500"> 300</option>
							<option value="1000">1000 </option>

                     </select>
                    </p>   
                    <label>Nome completo</label> <br>
                    <input id="nome_cad" name="nome_user" placeholder="Nome completo:"  type="text" autocomplete="off" required /> <br><br>
                   
                    <label>Tefone do organizador</label> <br>
                    <input id="tefone_cad" name="telefone_user" placeholder="Telefone:"  autocomplete="off" required type="tel"  /> <br><br>
                   
                    <label>Email do organizador</label> <br>
                    <input id="email_cad" name="email_email" placeholder="Email:"  autocomplete="off" required type="email"  /><br><br>
                    <input id="butao" type="submit" class="btn" value="Criar Evento"/> 
                    
                </form> 
            </div>
            <footer>
               <p>Todos os direitos reservados</p>
            </footer>
        </body>
    </html> 