<?php
session_start();

include("../php/config.php");
protegePagina();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Painel do Aluno</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.html"><img src="../images/logo.png"/></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php echo "Ultimo acesso ". $_SESSION['data_ultimo_login'] ?> <a href="../php/logout.php" class="btn btn-danger" style="margin-left: 30px">Sair</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Painel Inicial</a>
                    </li>
                     <li>
                        <a class="active-menu"  href="sala.php"><i class="fa fa-desktop fa-3x"></i> Sala de Aula</a>
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
                        <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Atendimento </a>
                    </li>					
                </ul>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                       
                     <h2><strong>CURSO DE INFORMÁTICA</strong></h2>  
                        <h5><?php echo "Bem vindo <strong>". $_SESSION['nome'] ."</strong>, ao curso de Excel. "?></h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                    
                      <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         	<strong>Microsoft Excel 2010</strong>
                            
                            
                        </div>        
                                      
                                    <div class="panel-body"> 

                    <h4>Frame de video</h4>
                    <iframe width="980" width="560" height="551" height="315" src="https://www.youtube.com/embed/yd3pefTcQCQ?list=PLWShyXDYqUBRFgYNbD74aK29WjQLaKIVi" frameborder="0" allowfullscreen></iframe>
                    <p>Conhecido como o mais popular editor de textos do mercado, a versão 2010 do Microsoft Word chega para manter o programa na posição de uma das melhores opções quando o objetivo é compor trabalhos ou até mesmo fazer postagens em blogs. Embora a interface não seja tão diferente da versão 2007, diversas novidades garantem uma experiência de uso ainda mais confortável.

A interface permanece a Ribbon, mesma da versão anterior, porém ganhou um fundo branco em vez de azulado. Para deixar a utilização mais fácil, o sistema de abas sofreu ligeiras alterações, principalmente no que diz respeito à ordem e tamanho com que algumas funções são exibidas – caso da contagem de palavras, que agora ganha destaque na aba “Revisão”.</p>
                    <!--<a href="#" class="btn btn-default">default</a>
                    <a href="#" class="btn btn-primary">primary</a>
                    <a href="#" class="btn btn-danger">danger</a>
                    <a href="#" class="btn btn-success">success</a>
                    <a href="#" class="btn btn-info">info</a>
                    <a href="#" class="btn btn-warning">warning</a>-->

                   
                    <h4>Downloand do PDF</h4>
                    <!--<iframe src="http://www.cpcrs.com.br/blog/wp-content/uploads/2015/11/Inform%C3%A1tica-Sandro-Word-2010-PREENCHIDO-2015.pdf" width="600" height="780">Carregando...</iframe>
                    
                    <object data="meuarquivo.pdf" type="application/pdf">
    					<p>Seu navegador não tem um plugin pra PDF</p>
					</object>-->
                    
                    <h4>Editor de texto</h4>
                    <iframe src="https://docs.google.com/spreadsheets/d/1d0n3iQsixwX0_4uLG2yhgvdu8qlb1LzvDA8kCJq1xD4/edit?usp=sharing" width="980" width="500" height="700" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
                   <!-- <a href="#" class="btn btn-default btn-xs">default</a>
                    <a href="#" class="btn btn-primary btn-xs">primary</a>
                    <a href="#" class="btn btn-danger btn-xs">danger</a>
                    <a href="#" class="btn btn-success btn-xs">success</a>
                    <a href="#" class="btn btn-info btn-xs">info</a>
                    <a href="#" class="btn btn-warning btn-xs">warning</a>-->

					<h4>Perguntas e Resposta</h4>
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScc_JTY24kg-GqRfUZ2ok-1vC9qjWxrnUerGnezu-QfCdCETQ/viewform?embedded=true" width="980" width="500" height="3600" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
                  
                   <!-- <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm">default</a>
                    <a href="#" class="btn btn-primary btn-sm">primary</a>
                    <a href="#" class="btn btn-danger btn-sm">danger</a>
                    <a href="#" class="btn btn-success btn-sm">success</a>
                    <a href="#" class="btn btn-info btn-sm">info</a>
                    <a href="#" class="btn btn-warning btn-sm">warning</a>-->

                   <!-- 
                    <h4>Large Button</h4>

                   <a href="#" class="btn btn-default btn-lg">default</a>
                    <a href="#" class="btn btn-primary btn-lg">primary</a>
                    <a href="#" class="btn btn-danger btn-lg">danger</a>
                    <a href="#" class="btn btn-success btn-lg">success</a>
                    <a href="#" class="btn btn-info btn-lg">info</a>-->

                   
                </div>
            </div>
                          </div>
                     
                <!-- /. ROW  
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Circle Icon Buttons 
                        </div>
                       
                        <div class="panel-body">
                             <br /> <br />
                            <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i>
                            </button>
                            <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-money"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i>
                            </button>
                           <br />
                             <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                        </div>
                        
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Icons Examples : 
                        </div>
                       
                        <div class="panel-body">
                            <br />
                            <i class="fa fa-desktop "></i>
                            
                             <i class="fa fa-desktop fa-2x"></i>
                              <i class="fa fa-desktop fa-3x"></i>
                              <i class="fa fa-desktop fa-4x"></i>
                              <i class="fa fa-desktop fa-5x"></i>
                              <br />
                             <br />
                            <i class="fa fa-flask "></i>
                            
                             <i class="fa fa-flask fa-2x"></i>
                              <i class="fa fa-flask fa-3x"></i>
                              <i class="fa fa-flask fa-4x"></i>
                              <i class="fa fa-flask fa-5x"></i>
                              <br />
                              <p>
                        For more customization Of icons please visit website : fortawesome.github.io/Font-Awesome/icons/ or  <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank" >Click here</a> . You will get all font-awesome icons and there classes there.
                        </p>
                        </div>
                        
                    </div>
                    </div>
                </div>
                 <!-- /. ROW  
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Simple Progress Bars 
                        </div>
                       
                        <div class="panel-body">
                       <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
    <span class="sr-only">20% Complete</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
    <span class="sr-only">60% Complete (warning)</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    <span class="sr-only">80% Complete</span>
  </div>
</div>
                            </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Stripped Progress Bars 
                        </div>
                       
                        <div class="panel-body">
                       <div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
    <span class="sr-only">20% Complete</span>
  </div>
</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
    <span class="sr-only">60% Complete (warning)</span>
  </div>
</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    <span class="sr-only">80% Complete</span>
  </div>
</div>
                            </div>
                            </div>
                    </div>
                </div>
                 <!-- /. ROW  
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Animated Progress Bars 
                        </div>
                       
                        <div class="panel-body">
                       <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
                            </div>
                            </div>
                    </div>
                      <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Stacked Progress Bars 
                        </div>
                       
                        <div class="panel-body">
                       <div class="progress">
  <div class="progress-bar progress-bar-success" style="width: 35%">
    <span class="sr-only">35% Complete (success)</span>
  </div>
  <div class="progress-bar progress-bar-warning" style="width: 20%">
    <span class="sr-only">20% Complete (warning)</span>
  </div>
  <div class="progress-bar progress-bar-danger" style="width: 10%">
    <span class="sr-only">10% Complete (danger)</span>
  </div>
</div>
                            </div>
                            </div>
                    </div>
                </div>
                <!-- /. ROW  
                <div class="row">
                    <div class="col-md-6">
                       
                     <!--  Modals
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Modals Example
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Click  Launch Demo Modal
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title Here</h4>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Modals
                
                    </div>
                     <div class="col-md-6">
                          <div class="panel panel-default">
                        <div class="panel-heading">
                            Alerts Examples
                        </div>
                        <div class="panel-body">
                            <h5><strong>Simple Alert</strong></h5>
                            <div class="alert alert-info">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div>
                            Info: You can use other classes like <i>alert-success</i> , <i>alert-warning</i> & <i>alert-danger</i> instead of <i>alert-info</i>
                           <br />
                              <h5><strong>Dismissable Alert</strong></h5>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div>
                            Info: You can use other classes like <i>alert-success</i> , <i>alert-warning</i> & <i>alert-danger</i> instead of <i>alert-info</i>
                           
                             </div>
                              </div>
                     </div>
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
 
</body>
</html>
