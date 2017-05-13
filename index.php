<?php

include("php/config.php");

?>
<!DOCTYPE html>
<html lang="br">
<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9095521793912977",
    enable_page_level_ads: true
  });
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Atitude Cursos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
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

<body style="background: #e5e5e5; color: #999" data-spy="scroll" data-target="#navbar" data-offset="0">
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
                <a class="navbar-brand" href="index.php"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active any"><a href="index.php"><i class="fa fa-home fa-lg"></i></a></li>
                    <li class="any"><a href="index.php#Cursos">Cursos</a></li>
                    <li><a href="cadastro.html">Cadastre-se</a></li>
                    <li class="any"><a href="index.php#contact">Contato</a></li>
                </ul>
                <form class="navbar-form navbar-right" method="post" action="php/verifica_usuario.php">
                    <div class="form-group">
                        <input type="text" size="15% 10px" placeholder="Email" name="usuario" required class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" size="15% 10px" placeholder="Senha"  name="senha" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</header><!--/#header-->

<section id="main-slider" class="carousel">
    <div class="carousel-inner">
        <div class="item active">
            <div class="container">
                <div class="carousel-content">
                    <h1>Cursos Online de Qualidade</h1>
                    <p class="lead">Nosso foco é fazer com que você aprenda de forma dinâmica e interativa<br>Para isso contamos com uma equipe de profissionais qualificados</p>
                </div>
            </div>
        </div><!--/.item-->
        <div class="item">
            <div class="container">
                <div class="carousel-content">
                    <h1>Cursos Gratuitos</h1>
                    <p class="lead">Cursos totalmente grátis com o certificado opcional<br>Tenha uma boa qualificação e aprenda a ser um bom profissional</p>
                </div>
            </div>
        </div><!--/.item-->
    </div><!--/.carousel-inner-->
    <a class="prev" href="#main-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
    <a class="next" href="#main-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
</section><!--/#main-slider-->

<section id="Cursos">
    <div class="container">
      <div class="box first all">
        <div class="center gap">
          <h2>Cursos</h2>
          <p class="lead">Diversos cursos para atender sua necessidade.</p>
        </div><!--/.center-->
        <ul class="portfolio-filter">
                <li><a class="btn btn-primary active" href="#" data-filter=".info">Informática</a></li>
                <li><a class="btn btn-primary" href="#" data-filter=".prog">Programação</a></li>
                <li><a class="btn btn-primary" href="#" data-filter=".mac">Mecânica</a></li>
                <li><a class="btn btn-primary" href="#" data-filter=".emp">Empresa</a></li>
                <li><a class="btn btn-primary" href="#" data-filter=".port">Portuário</a></li>
                <li><a class="btn btn-primary" href="#" data-filter=".idi">Idiomas</a></li>
                <li><a class="btn btn-primary" href="#" data-filter=".exat">Exatas</a></li>

                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Nome do Curso ..." class="form-control">
                    </div>
                    &nbsp;
                    <button type="submit" class="btn btn-danger"><i class="fa fa-search"></i></button>
                </form>
            </ul><!--/#portfolio-filter-->
            <?php
            $sql = mysqli_query($conexao,"SELECT id,nome,link,descricao,categoria,page FROM cad_cursos ");

            while($valor = mysqli_fetch_array($sql)) {
            ?>
          </ul><!--/#portfolio-filter-->
            <ul class="portfolio-items col-md-4">
                <li class="portfolio-item apps <?=$valor["categoria"]?>">
                    <div class="item-inner">
                        <div class="portfolio-image">
                            <img src="Aluno/<?=$valor["link"]?>" alt="">
                            <div class="overlay">
                                <a href="cadastro.html"><button class='preview btn btn-success'><i class='fa fa-plus''></i> Inscrever-se</button></a>
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
          <!-- /.row -->
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#portfolio-->

<section id="services">
    <div class="container">
        <div class="box first">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <i class="fa fa-suitcase icon-md icon-color1"></i>
                        <h4>Carreira profissional</h4>
                        <p>Qualificar-se é um investimento para o seu futuro<br>O profissional bem instruido de conhecimento tem a chave para o sucesso em sua carreira.</p>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <i class="fa fa-clock-o icon-md icon-color2"></i>
                        <h4>Estude a qualquer hora</h4>
                        <p>Com a plataforma de ensino da Atitude Cursos você pode estudar a qualquer hora e em qualquer lugar, 24 horas por dia a sua disposição.</p>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <i class="fa fa-group icon-md icon-color3"></i>
                        <h4>Mercado de trabalho</h4>

                        <p>A cada dia o mercado de trabalho se torna mais exigente, os profissionais com melhores qualificações são os que se destacam.</p>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <i class="fa fa-check icon-md icon-color4"></i>
                        <h4>Certificado de conclusão</h4>
                        <p>Todos os cursos são gratuitos você só paga o certificado que é opcional.</p>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <i class="fa fa-book icon-md icon-color5"></i>
                        <h4>Material didático completo</h4>
                        <p>Você poderá solicitar sua apostila a cada etapa de seu curso sem cobrança de taxas.</p>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <i class="fa fa-gears icon-md icon-color6"></i>
                        <h4>Atividades e Exercicíos</h4>
                        <p>Cada curso conta com uma série de exercicíos interativos para melhor fixação do conteúdo.</p>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.row-->
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#services-->

<section id="contact">
    <div class="container">
        <div class="box last">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Fale Conosco</h1>
                    <div class="alert alert-info alert-dismissable div" id="div">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Menssagem enviada com sucesso, em breve entraremos em contato.
                    </div>
                    <p>Como podemos ajudar você?. Deixe seu comentario, tire suas dúvidas</p>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form" onSubmit="return Enviar();">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required placeholder="Nome">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required placeholder="Endereço de email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" required class="form-control" rows="8" placeholder="Menssagem"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-send"></span> Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!--/.col-sm-6-->
                <div class="col-sm-6">
                    <h1>Endereço</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <strong>Matriz</strong><br>
                                Rua Germano Aranha, Quadra 294, Lote 03,
                                Vila dos Cabanos-Barcarena-PA<br>
                                <abbr title="Phone">Telefone:</abbr> (91) 3754-2307
                            </address>
                        </div>
                        <div class="col-md-6">
                            <address>
                                <strong>Fone</strong><br>
                                <abbr title="Phone">Fixo:</abbr> (91) 3754-2307<br>
                                <b>VIVO</b> (91) 9 9372-1376<br>
                                <b>CLARO</b> (91) 9 8519-6827<br>
                                <b>OI</b> (91) 9 8717-2307<br>
                                <b>TIM</b> (91) 9 8185-7169<br>
                            </address>
                        </div>
                    </div>
                    <h1>Social</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/atituderhcursos"><i class="fa fa-facebook icon-social icon-facebook"></i> Facebook</a></li>
                                    <li><a href="https://www.youtube.com/channel/UCIefkEGhy-kIHtqo7hdUS-A"><i class="fa fa-youtube icon-youtube icon-social"></i> Youtube</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="https://twitter.com/CursosAtitude"><i class="fa fa-twitter icon-twitter icon-social"></i> Twitter</a></li>
                                    <li><a href="https://www.linkedin.com/in/atitude-cursos-451271143/"><i class="fa fa-linkedin icon-linkedin icon-social"></i> Linkedin</a></li>
                                </ul>
                            </div>
                        </div>
                </div><!--/.col-sm-6-->
            </div><!--/.row-->
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#contact-->

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
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
<script>
    function Enviar() {
        document.getElementById("div").style.display="block";
    }
</script>
</body>
</html>
