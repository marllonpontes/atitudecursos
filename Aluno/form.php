<?php
session_start();

include("../php/config.php");
protegePagina();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
      <link rel="shortcut icon" href="../images/ico/favicon.png">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposede.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atendimento</title>
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
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Painel Inicial</a>
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
                        <a class="active-menu"  href="form.php"><i class="fa fa-pencil-square fa-3x"></i> Atendimento </a>
                    </li>					
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Atendimento</h2>   
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
                                <h2>Fale Conosco</h2>
                                <p align="justify">Estamos a todo o momento nos esforçando para melhorar nossa plataforma de ensino, sempre
                                    pensando na melhor forma de ajudar você. Nos ajude também com críticas construtivas, comentarios
                                    ou dúvidas a respeito.</p>
                                <br>
                            </div>
                            <!-- Contact Form -->
                            <div class="col-md-8">
                            <form name="contact-form" method="post" action="sendemail.php" role="form">
                                <label class="mini">Assunto</label>
                                <div class="row">
                                    <input name="assunto" class="form-control" type="text">
                                </div>
                                <label class="mini">Mensagem</label>
                                <div class="row">
                                    <textarea name="message" rows="8" class="form-control"></textarea>
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
                        <div class="col-md-4">
                            <!-- Recent Posts -->
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Contato</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Atendimento de segunda a sábado das 8:00 as 19:00.</p>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="fa fa-phone"></i>(91) 3754-2307</li>
                                        <li>
                                            <i class="fa fa-envelope"></i> atituderhcursos@gmail.com</li>
                                        <li>
                                            <i class="fa fa-code"></i> webmaster@atitudecursos.org</li>
                                    </ul>
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fatituderhcursos%2F&tabs=timeline&width=300&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="300" style="border:none;overflow:hidden;margin-left:-7px" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- End Side Column -->
                    <div class="col-md-8 per">
                        <div class="col-md-10 mar-20">
                        <div class="panel panel-success" >
                            <div class="panel-heading">
                                <h3 class="panel-title">Perguntas Frequentes</h3>
                            </div>
                            <div class="panel-body">

                                <ul class="main">
                                    <li class="down-20"><i class="fa fa-bookmark"></i> Como acessar o curso, finalizar a prova e solicitar o certificado? <i class="fa fa-caret-down pull-right"></i>
                                        <ul>
                                            <li class="ind"><i class="fa fa-edit"></i> Para assistir sua video aula, selecione a guia > <a href="#">Sala de Aula</a>, que se encontra no menu de navegação a esquerda.<br>
                                                Ao finalizar o curso o botão solicitar certificado que fica a esquerda do curso selecionado, ficara ativo. Ao clicar no botão solicitar
                                                certificado, você será redirecionado para fazer a prova do cursos selecionado(obs.A nota minima na prova é 5.0), apos concluir a avaliação você podera escolher a forma de pagamento
                                                do certificado.</li>
                                        </ul>
                                    </li>
                                    <li class="down-20"><i class="fa fa-bookmark"></i> Preciso pagar alguma taxa de matricula ou efetuar alguma compra para fazer um curso? <i class="fa fa-caret-down pull-right"></i>
                                        <ul>
                                            <li class="ind"><i class="fa fa-edit"></i> Não. Todas as video aulas e apostilas são gratuitas.<br>
                                                O unico pagamento existente no site é o certificado ao final do curso, que não é obrigatorio.</li>
                                        </ul>
                                    </li>
                                    <li class="down-20"><i class="fa fa-bookmark"></i> Sendo reprovado na prova, o que acontece? <i class="fa fa-caret-down pull-right"></i>
                                        <ul>
                                            <li class="ind"><i class="fa fa-edit"></i> Sendo reprovado, a prova ficará trancada por 30 minutos, depois será liberada novamente.<br>
                                            A nota aparece logo que você  finaliza a prova, no topo da página.</li>
                                        </ul>
                                    </li>
                                    <li class="down-20"><i class="fa fa-bookmark"></i> Quer saber mais sobre o certificado? <i class="fa fa-caret-down pull-right"></i>
                                        <ul>
                                            <li class="ind"><i class="fa fa-edit"></i> Entre na guia ><a href="#"> certificados</a></li>
                                        </ul>
                                    </li>
                                    <li class="down-20"><i class="fa fa-bookmark"></i> Por que o certificado é pago? <i class="fa fa-caret-down pull-right"></i>
                                        <ul>
                                            <li class="ind"><i class="fa fa-edit"></i> Oferecemos cursos, atividades, a plataforma de estudos e o suporte ao aluno de forma gratuita.<br>
                                            O certificado é opcional e possui uma pequena taxa de administração: Boleto Bancário R$49,99 ou em até 6x R$9,00 no Cartão de Crédito, até mesmo para ajudar
                                            esse projeto a continuar funcionando.<br>
                                            Ao solicitar o certificado, você estará crescendo profissionalmente e contribuindo para que milhares de pessoas estudem gratuitamente em nosso site.</li>
                                        </ul>
                                    </li>
                                    <li class="down-20"><i class="fa fa-bookmark"></i> Qual o valor, as opções de pagamento e o prazo de liberação do certificado? <i class="fa fa-caret-down pull-right"></i>
                                        <ul>
                                            <li class="ind"><i class="fa fa-edit"></i> Prazo de liberação conforme a opção de pagamento:<br>
                                                Boleto Bancário: Certificado disponível em 1 dia útil(a partir do pagamento efetuado). Não é necessário enviar o comprovante por e-mail.<br>
                                            PagSeguro Cartão de Crédito: Certificado disponível em 5 minutos(a partir do status aprovado). Não é necessário enviar o comprovante por e-mail.</li>
                                        </ul>
                                    </li>
                                    <li class="down-20"><i class="fa fa-bookmark"></i> Como é o certificado e aonde será disponibilizado? <i class="fa fa-caret-down pull-right"></i>
                                        <ul>
                                            <li class="ind"><i class="fa fa-edit"></i> Disponibilizado na guia > <a href="#">certificados</a><br>, Após sua liberação. Nosso certificado
                                            é digital, pronto para ser salvo e/ou impresso.<br>
                                            Estimamos que ao levar em uma gráfica para imprimir em alta resolução,terá um custo máximo de R$5,00.<br>
                                            Não trabalhamos com envio de certificado pelos correios, pois demora muito e é uma forma já ultrapassada.<br>
                                            Para as pessoas que moram próximo a matrix da Atitude curso, o certificado pode ser pago e/ou disponibilizado.</li>
                                        </ul>
                                    </li>
                                    <li class="down-20"><i class="fa fa-bookmark"></i> Aonde consulto o código de autenticação do meu certificado? <i class="fa fa-caret-down pull-right"></i>
                                        <ul>
                                            <li class="ind"><i class="fa fa-edit"></i> Entre na guia > <a href="#">Painel inicial</a> > <a href="../certificado.html">Autenticação do Certificado</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- End recent Posts -->
                    <!-- About -->
                    <div class="col-md-4 mar-20">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Veja Também</h3>
                            </div>
                            <div class="panel-body">
                                <img src="../images/shipping.jpg">
                            </div>
                        </div>
                        <!-- End About -->
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
