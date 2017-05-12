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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposede.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cursos</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet"/>
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
                        <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Painel Inicial</a>
                    </li>
                     <li>
                        <a  href="sala.php"><i class="fa fa-desktop fa-3x"></i> Sala de Aula</a>
                    </li>
                    <li>
                        <a href="cursos.php"><i class="fa fa-book fa-3x"></i> Mais Cursos</a>
                    </li>
						   <li  >
                        <a class="active-menu"  href="certificados.php"><i class="fa fa-qrcode fa-3x"></i> Certificados</a>
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
                     <h2>Mais Cursos</h2>   
                        <h5><?php echo "Olá <strong>". $_SESSION['nome'] ."</strong>, aqui você encontra os certificados dos cursos que você concluiu."?></h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
             <div class="row">
                 
                     <section class="mar-20">
        
            <div class="box first">

                    <?php
                    $sql = mysqli_query($conexao,"SELECT id,nome,link,descricao,categoria,page FROM cad_cursos ");

                    while($valor = mysqli_fetch_array($sql)) {
                    $id = $valor['id'];
                    ?>
                </ul><!--/#portfolio-filter-->
                <ul class="portfolio-items col-3">
                    <li class="portfolio-item apps <?=$valor["categoria"]?>">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?=$valor["link"]?>" alt="">
                                <div class="overlay">
                                    <?php echo "<button class='preview btn btn-success'><i class='fa fa-certificate'></i> Ver Certificado</button>"; ?>
                                </div>
                            </div>
                            <div class="blank">
                            	<h4><?=$valor["nome"]?></h4>
                                <p><?=$valor["descricao"]?></p>
                            </div>
                        </div>
                    </li><!--/.portfolio-item-->
                    <?php
                    }
                    ?>

                </ul>  

            </div><!--/.box-->
       
    </section><!--/#portfolio-->
                
           
               </div>  <!-- /. ROW  -->
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
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/jquery.isotope.min.js"></script>
    <script src="../assets/js/jquery.prettyPhoto.js"></script>
    
   
</body>
</html>
