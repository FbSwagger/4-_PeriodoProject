<!DOCTYPE html>
<?php
    include('conexao.php');
    $consulta = "SELECT * FROM eventos";
    $con = $conexao->query($consulta) or die($conexao->error);

?>
    <html>
        <head>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
                 <link rel="stylesheet" href="./css/eventos.css"> 
                            <link rel="icon" type="image/png" sizes="16x16" href="">
                <title>Tela admin</title>
                <!-- Custom CSS -->
                <link href="./assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
                <!-- Custom CSS -->
                <link href="./dist/css/style.min.css" rel="stylesheet">
                <link href="./dist/css/estilo.css" rel="stylesheet">
                <script src="js/main.js"></script>
        </head>
        <body>

                <nav id="nav-bar">
                        <a href="http://localhost/projeto/"><img id="logo" src="img/logo.png"></a>
                </nav>
                
                <div id="filtro">
                <h2 id="text-atividade">Eventos</h2><br><br>
                    <div class="row">
                           
                            <form class="form-inline pull-right ng-pristine ng-valid">
                                    <!---->
                                    <div class="form-group">
                                        <select ng-model="filtro.necessitaInscricao" ng-change="filtrarAtividade(); " class="form-control ng-pristine ng-valid ng-empty ng-touched" st-delay="0" >
                                            <option ng-value="null" value="object:null" selected="selected">Todas os eventos</option>
                                            <option ng-value="true" value="boolean:true">Eventos gratuitos</option>
                                            <option ng-value="false" value="boolean:false">Eventos pagos</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input ng-model="filtro.busca" type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" placeholder="Buscar" ng-change="filtrarAtividade();">
                                    </div>
                                    <div class="form-group">
                                    
                                    </div>
                                    <div class="form-group">
                                        <div class="dropdown">
                                            </button>
                                            <ul class="dropdown-menu space" aria-labelledby="dropdownMenu1">
                                                <li>
                                                    <a href="#" target="_blank">Atividades</a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">Inscritos</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-verde" data-toggle="modal" data-target="#ModalLongoExemplo" >
                                            <i class="mdi mdi-plus"></i>
                                            Pesquisar evento
                                        </button>
                                        <!-- Botão para acionar modal -->

                            </form>
                        </div>
                </div>
            <div class="box effect1">  
                
                   

           <?php while($dado = $con->fetch_array()){?>
                                            
                                            <ul id="lista-eventos">
                                                <li><?php echo $dado["id_evento"] ?></li>
                                                <li><?php echo $dado["nome_evento"] ?></li>
                                                <li><?php echo $dado["quant_participantes"] ?></li>
                                                <li><?php echo $dado["nome_user"] ?></li>
                                               <hr>
                                                
                                               
                                            </ul>
                                    <?php } ?> 
                

                 

            </div>
        </body>
    </html> 






