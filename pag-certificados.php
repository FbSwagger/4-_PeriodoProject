<!DOCTYPE html>
<?php
    include('conexao.php');
  

?>

<html dir="ltr" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title>Tela admin</title>
    <!-- Custom CSS -->
    <link href="./assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./dist/css/style.min.css" rel="stylesheet">
    <link href="./css/pag-certificados.css" rel="stylesheet">
    <link rel="shortcut icon"  href="img/favicon.ico" />
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="http://localhost/4-_PeriodoProject/painel.php" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                              
                                <img src="img/EVENTOPI.png" alt="homepage" class="light-logo" />
                            </b>
                           
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                       
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="http://localhost/projeto/"><i class="ti-user m-r-5 m-l-5"></i>Sair</a>
                
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/4-_PeriodoProject/painel.php" aria-expanded="false">
                                <i class="mdi mdi-calendar"></i>
                                <span class="hide-menu">Programação</span>
                            </a>
                        </li>
                    
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                <i class="mdi mdi-account"></i>
                                <span class="hide-menu">Pessoas</span>
                            </a>
                        </li>
                         
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/4-_PeriodoProject/inscritos.php" aria-expanded="false">
                                <i class="mdi mdi-ticket"></i>
                                <span class="hide-menu">Inscrições</span>
                            </a>
                        </li>
                       
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/4-_PeriodoProject/pag-certificados.php" aria-expanded="false">
                                <i class="mdi mdi-school"></i>
                                <span class="hide-menu">Certificados</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                <i class="mdi mdi-desktop-mac"></i>
                                <span class="hide-menu">Página do evento </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                <i class="mdi mdi-settings"></i>
                                <span class="hide-menu">Configuração</span>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Certificados</h4>
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8">
                        <div  ng-controller="Atividade">
                            <ul class="nav nav-tabs space">
                                <li class="">
                                    <a href="http://localhost/projeto/pag-certificados.php"><button type="button" class="btn btn-secondary">Criar certificado</button></a>
                                </li>
                                <li class="">
                                    <button type="button" class="btn btn-light">Enviar por email</button>
                                </li>
                            
                                <li class="">
                                    <button type="button" class="btn btn-light">Configurar modelo</button>
                                </li>


                            </ul>
                       </div>
                    </div>
                   
              
                   
                    
                </div>
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div id="container-certificado" class="row">
   
                    <form action="gerar_certificado/gerador.php" method="POST">
                     <div class="form-group">
                        <button id="btn-verde" type="button" class="btn" data-toggle="modal" data-target="#ModalLongoExemplo"> <i class="mdi mdi-plus"></i>Novo certificado</button>
                                    <!-- Botão para acionar modal -->

                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header header-modal modal-verde">
                                                <h5 class="modal-title" id="TituloModalLongoExemplo">Adicionar Certificado</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                   
                                                        <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                                                                </div>
                                                                <input name="nome" type="text" autocomplete="off" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" required>
                                                        </div>
                                                            <div class="row">
                                                            <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                                                                    </div>
                                                                    <input name="email" type="text" autocomplete="off" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" required>
                                                            </div>

                                                        </div>
                                                        <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text" id="inputGroup-sizing-default">CPF</span>
                                                                </div>
                                                                <input name="cpf" type="text" autocomplete="off" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" required>
                                                        </div>
                                                        <div class="form-group">
                                                                    <select name="atividade" class="form-control ng-pristine ng-valid ng-empty ng-touched" st-delay="0" >
                                                                        <option ng-value="null" value="object:null" selected="selected">Atividade</option>
                                                                        <option ng-value="true" value="Minicurso">Minicurso</option>
                                                                        <option ng-value="false" value="palestra">Palestra</option>
                                                                        <option ng-value="false" value="workshop">Workshop</option>
                                                                    </select>
                                                            </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                            <button type="submit" class="btn btn-verde">Gerar</button>
                                                        </div>
                                                 
                                                        
                                                </div>
                                                   
                                            </div>
                                            </div>
                                        </div>
                                </div>
                    </form>
                 </div>
                     <table class="table">
                                        <thead  id="table-cabecalho">
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Titulo</th>
                                            <th scope="col">Tipo pessoa</th>
                                            <th scope="col">Modelo</th>
                                            <th scope="col">Ver</th>
                                            
                                            
                                         

                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                         
                                            
                                            <tr>
                                                <td><?php echo $dado["id_certificado"] ?></td>
                                                <td><?php echo $dado["titulo_certificado"] ?></td>
                                                <td><?php echo $dado["tipo_pessoa"] ?></td>
                                                <td><?php echo $dado["modelo"] ?></td>
                                                 <td> <button type="button " class="btn"><a  href="./img/certificado ES.jpg">Ver certificado</a></button></td>
                                                
                                                
                                            </tr>
                                            
                                        </tbody>
                                        </table>

                    <!-- column -->
                   
                         <!-- Comment Row -->
                                
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
          
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="./dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="./dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="./assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="./assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="./dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>