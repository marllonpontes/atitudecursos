<?php
session_start();

include("../php/config.php");
protegePaginaAdm();

// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM certificado ORDER BY data_cadastro DESC");
// executa a query
$dados = mysqli_query($conexao, $query) or die(mysql_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
      <link rel="shortcut icon" href="../images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposede.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Certificados</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet"/>
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
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
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Painel Inicial</a>
                    </li>
                     <li>
                        <a  href="sala.php"><i class="fa fa-desktop fa-3x"></i> Sala de Aula</a>
                    </li>
                    <li>
                        <a  href="cursos.php"><i class="fa fa-book fa-3x"></i> Mais Cursos</a>
                    </li>
						   <li  >
                        <a class="active-menu" href="certificados.php"><i class="fa fa-qrcode fa-3x"></i> Certificados</a>
                    </li>	
                      <li  >
                        <a  href="dados.php"><i class="fa fa-table fa-3x"></i> Dados do Aluno </a>
                    </li>
                    <li  >
                        <a href="form.php"><i class="fa fa-pencil-square fa-3x"></i> Atendimento </a>
                    </li>					
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>CADASTRAMENTO DE CERTIFICADOS</h2>   
                        <h5><?php echo "Olá <strong>". $_SESSION['nome'] ."</strong>  "?></h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />
               <div id="content">
                <div class="row">

                        <!-- Main Column -->
                        <div class="col-md-8 down-20">
                                <div class="col-md-10">
                                <!-- Main Content -->
                                <h2>Preencha os campos abaixo</h2>
                                <div class="status alert alert-success" style="display: none"></div>
                                <br>
                            </div>
                            <!-- Contact Form -->
                            <div class="col-md-8">
                            <form name="contact-form" method="post" action="../php/cadcertificados.php">
                                <label class="mini">Matricula</label>
                                <div class="row">
                                    <input name="keyword" class="form-control" type="text">
                                </div>
                                <label class="mini">Curso</label>
                                <div class="row">
                                    <input name="course" class="form-control" type="text">
                                </div>
                                <label class="mini">Descrição</label>
                                <div class="row">
                                    <textarea name="description" rows="8" class="form-control">Concluiu com bom aproveitamento</textarea>
                                </div>
                                <label class="mini">Data de Inicio</label>
                                <div class="row">
                                    <input name="datainicio" class="form-control" type="text">
                                </div>
                                <label class="mini">Data de Termino</label>
                                <div class="row">
                                    <input name="datafim" class="form-control" type="text">
                                </div>
                                <label class="mini">Nome Completo</label>
                                <div class="row">
                                    <input name="address" onFocus="" class="form-control" type="text">
                                </div>
                                <p>
                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Enviar</button>
                                </p>
                            </form>
                            <!-- End Contact Form -->
                            <!-- End Main Content -->
                        </div>
                        </div>
                        <!-- End Main Column -->
                        <!-- Side Column -->
                        
                
                    <div class="col-lg-12 col-md-9 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Tabela de alunos
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td class="col-lg-1"><strong>Matricula</strong></td>
                                            <td class="col-lg-2"><strong>Aluno</strong></td>
                                            <td class="col-lg-2"><strong>Curso</strong></td>
                                            <td class="col-lg-2"><strong>Descriçao</strong></td>
                                            <td class="col-lg-2"><strong>Data Início</strong></td>
                                            <td class="col-lg-2"><strong>Data Término</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
										// se o número de resultados for maior que zero, mostra os dados
										if($total > 0) {
											// inicia o loop que vai mostrar todos os dados
											do {
									?>
									
                                        <tr>
                                            <td><?=$linha['keyword']?></td>
                                            <td><?=$linha['address']?></td>
                                            <td><?=$linha['course']?></td>
                                            <td><?=$linha['description']?></td>
                                            <td><?=$linha['data_inicio']?></td>
                                            <td><?=$linha['data_fim']?></td>
                                        </tr>
                                       
									<?php
											// finaliza o loop que vai mostrar os dados
											}while($linha = mysqli_fetch_assoc($dados));
										// fim do if 
										}
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    </div>
                    </div>
                    </div>
                </div>
            </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
   <script type="application/javascript">
       $('ul.main li').click(function() {
           $(this).children('ul').toggle();
       });
   </script>
   
</body>
</html>
