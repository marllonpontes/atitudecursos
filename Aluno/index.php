<?php
session_start();

include("../php/config.php");
protegePagina();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88350404-1', 'auto');
  ga('send', 'pageview');

</script>
      <meta charset="utf-8" />
      <link rel="shortcut icon" href="../images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposede.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Painel Inicial</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet"/>
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="../images/logo.png"/></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><i class="fa fa-clock-o"></i> <?php echo "Ultimo acesso ". $_SESSION['data_ultimo_login'] ?> 
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm" style="margin-left: 30px"><i class="fa fa-sign-out"> </i>Sair</button></div>

<div class="modal fade" id="confirm" role="dialog">
  <div class="modal-dialog modal-md">

    <div class="modal-content">
      <div class="modal-body">
            <p>Você deseja realmente sair?</p>
      </div>
      <div class="modal-footer">
        <a href="../php/logout.php" type="button" class="btn btn-danger" style="margin-left: 30px" id="delete">Confirmar</a>
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
      </div>
    </div>

  </div>
</div>

        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Painel Inicial</a>
                    </li>
                     <li>
                        <a  href="sala.php"><i class="fa fa-desktop fa-3x"></i> Sala de Aula</a>
                    </li>
                    <li>
                        <a  href="cursos.php"><i class="fa fa-book fa-3x"></i> Mais Cursos</a>
                    </li>
						   <li  >
                        <a   href="certificados.php"><i class="fa fa-qrcode fa-3x"></i> Certificados</a>
                    </li>	
                      <li  >
                        <a  href="dados.php"><i class="fa fa-table fa-3x"></i> Dados do Aluno </a>
                    </li>
                    <li  >
                        <a  href="form.php"><i class="fa fa-pencil-square fa-3x"></i> Atendimento </a>
                    </li>					
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Área do Aluno</h2>   
                        <h5><?php echo "Bem vindo <strong>". $_SESSION['nome'] ."</strong>  "?></h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-4 col-sm-7 col-xs-7">           
			<div class="panel panel-back noti-box">
                <span>
                    <i class="icon-box bg-color-red set-icon fa fa-laptop"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">120 Cursos</p>
                    <p class="text-muted">Cursos para diversas áreas do conhecimento</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-7 col-xs-7">           
			<div class="panel panel-back noti-box">
                <span >
                    <i class="icon-box bg-color-green set-icon fa fa-gears"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3000 Atividades</p>
                    <p class="text-muted">Atividades interativas para você fixar o que aprendeu</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-7 col-xs-7">           
			<div class="panel panel-back noti-box">
                <span>
                    <i class="icon-box bg-color-blue set-icon fa fa-mortar-board"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Certificado</p>
                    <p class="text-muted">Ao final do cursos você pode solicitar o Certificado</p>
                </div>
             </div>
		     </div>
                    
			</div>
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">           
			<div class="panel panel-back noti-box">
                <span>
                    <i class="icon-box bg-color-blue fa fa-info"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Dica importante !</p>
                    <p class="text-muted">Reserve uma a duas horas por dia para estudar</p>
                    <hr/>
                    <p class="text-muted">
                          <span class="text-muted color-bottom-txt"><i class="fa fa-pencil-square-o"></i>
                               Uma a duas horas por dia é o tempo ideal para você aprender com
                               agilidade e eficiência. Sempre fazendo uma pausa a cada meia hora passada de estudos. 
                               </span>
                    </p>
                </div>
             </div>
		     </div>
                    
                    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="panel back-dash">
                               <i class="fa fa-shield fa-3x"></i><strong> &nbsp; Autenticação do Certificado</strong>
                             <p class="text-muted">Seu certificado possui um número unico, que se encontra na parte de trás do 
                             certificado, no canto inferior esquerdo, com a indicação <b>número do certificado</b> (Nº).<br>
                             Teste a validade do seu certificado clicando no botão abaixo.</p>
                             <a href="../certificado.html"><button type="submit" class="btn btn-default">Autenticação do Certificado</button></a>
                        </div>
                       
                    </div>
                    
                        
        </div>
                 <!-- /. ROW  -->
                <div class="row"> 
                    
                      
                               <div class="col-md-9 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Introdução a Plataforma da Atidude Cursos
                        </div>
                        
                            <video width="745" height="390" poster="../assets/intro/capa.png" controls>
                            <source src="../assets/intro/intro.mp4" type="video/mp4">
                            </video>
                        
                    </div>            
                </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <i class="fa fa-bar-chart-o fa-5x"></i>
                            <h3>ID</h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                           Acompanhamento por indicadores de desempenho
                            
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            <i class="fa fa-edit fa-5x"></i>
                            <h3>Perfil</h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            Edite suas informaçoes de contato
                            
                        </div>
                    </div>                         
                        </div>
                
           </div>
                 <!-- /. ROW  -->
                <div class="row" >
                    <div class="col-md-3 col-sm-12 col-xs-12">
  <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <i class="fa fa-comments-o fa-5x"></i>
                            <h4> 20.000</h4>
                             <h4>Membros</h4>
                        </div>
                        <div class="panel-footer back-footer-green">
                             
                            Compartilhe conhecimento no forum e chat da comunidade.
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Tabela de Professores
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Sobrenome</th>
                                            <th>Especialidade</th>
                                             <th>Online</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Jorge</td>
                                            <td>Castelo</td>
                                            <td>Engenharia Mecânica</td>
                                            <td>Sim</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Cristiano</td>
                                            <td>Santos</td>
                                            <td>Engenharia de Software</td>
                                            <td>Não</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Mikael</td>
                                            <td>Valinoto</td>
                                            <td>Engenharia da Computação</td>
                                            <td>Sim</td>
                                        </tr>
                                         <tr>
                                            <td>4</td>
                                            <td>Marlon</td>
                                            <td>Pontes</td>
                                            <td>Cientista da Computação</td>
                                            <td>Sim</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    
   
</body>
</html>
