<?php

session_start();  // Inicia a session

?>
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Certificado | Atitude Cursos</title>
    <link rel="stylesheet" href="css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposede.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                    <li><a href="index.html"><i class="fa fa-home fa-lg"></i></a></li>
                    <li><a href="index.html#Cursos">Cursos</a></li>
                    <li><a href="cadastro.html">Cadastre-se</a></li>
                    <li><a href="index.html#contact">Contato</a></li>
                </ul>
                    <div class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" size="15% 10px" placeholder="Email" required class="form-control">
            </div>
            <div class="form-group">
              <input type="password" size="15% 10px" placeholder="Senha" required class="form-control">
            </div>
            <a href="Login.html"><button type="submit" class="btn btn-success">Entrar</button></a>
          </div>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12">
                    <div class="error-404-page text-center">
                    <br>
                    <br>
                    
                       
                        <h3><strong>RESULTADO DA BUSCA</strong> </h3>
                        
                        <h3>Confira abaixo os dados relativos ao certificado</h3>
                        <br>
                        <br>
                        
                        
                        <div class="col-lg-12 col-md-9 col-sm-12 col-xs-12">
               
                    <div class="panel panel-success">
                        <div class="panel-heading">
                           Tabela de resultado
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td class="col-lg-1"><strong>Matricula</strong></td>
                                            <td class="col-lg-3"><strong>Aluno</strong></td>
                                            <td class="col-lg-2"><strong>Curso</strong></td>
                                            <td class="col-lg-2"><strong>Descriçao</strong></td>
                                            <td class="col-lg-2"><strong>Data Início</strong></td>
                                            <td class="col-lg-2"><strong>Data Término</strong></td>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
									
                                        <tr>
                                            <td><?=$_SESSION['keyword']?></td>
                                            <td><?=$_SESSION['address']?></td>
                                            <td><?=$_SESSION['course']?></td>
                                            <td><?=$_SESSION['description']?></td>
                                            <td><?=$_SESSION['data_inicio']?></td>
                                            <td><?=$_SESSION['data_fim']?></td>
                                            
                                        </tr>
                                       
									
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    </div>
                        
                        
                        
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 | Todos os direitos reservados a <a target="_blank" href="#">Atitude Cursos</a>.
                </div>
                <div class="col-sm-6">
                    <img class="pull-right" src="images/designer.png" alt="ShapeBootstrap" title="ShapeBootstrap">
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="./busca.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
