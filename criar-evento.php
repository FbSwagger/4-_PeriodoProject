<!DOCTYPE html>
    <html>
        <head>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="css/criar-evento.css"> 
                <script src="js/main.js"></script>
        </head>
        <body>

                <nav id="nav-bar">
                        <a href="http://localhost/projeto/"><img id="logo" src="img/logo.png"></a>
                </nav>
                

            <div class="box effect1">  
                 

                <form class="box2"> 
                    
                    <label for="nome_cad" class="input-form"> Nome do evento </label><br>
                    <input id="nome_cad" name="nome_cad" placeholder="Nome:" required type="text" placeholder="" /> 
                    
                    <p>
                    <label> Expectativa de Participantes </label> 
                    </p> 

                    <p>
                    <select id="select" name="seleção campo" required>
							<option value="Menos de 300"> Menos de 300 </option> 
							<option value="300"> 300</option>
							<option value="Entre 300 a 1000"> Entre 300 a 1000 </option>
							<option value="Mais de 1000"> Mais de 1000 </option>
                    </select>
                    </p> 
                    
                    <input  href="http://localhost:2000/dados" id="butao" type="submit" class="btn" value="Enviar"/> 
                    
                </form> 
            </div>
        </body>
    </html>