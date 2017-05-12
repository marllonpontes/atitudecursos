<?php
session_start();

include("../php/config.php");
protegePagina();

$email = $_SESSION['email'];

// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM aluno WHERE email = '$email'");
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
    <title>Dados do Aluno</title>
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
                <a class="navbar-brand" href="index.html"><img src="../images/logo.png"/></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php echo "Ultimo acesso ". $_SESSION['data_ultimo_login'] ?> 
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
                        <a href="sala.php"><i class="fa fa-desktop fa-3x"></i> Sala de Aula</a>
                    </li>
                    <li>
                        <a  href="cursos.php"><i class="fa fa-book fa-3x"></i> Mais Cursos</a>
                    </li>
						   <li  >
                        <a   href="certificados.php"><i class="fa fa-qrcode fa-3x"></i> Certificados</a>
                    </li>	
                      <li>
                        <a class="active-menu" href="dados.php"><i class="fa fa-table fa-3x"></i> Dados do Aluno </a>
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
                     <h2>Dados do Aluno</h2>   
                        <h5><?php echo "Bem vindo <strong>". $_SESSION['nome'] ."</strong>"?></h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />
                 <div id="content">
                <div class="row">
					
                        <!-- Main Column -->
                        <div class="col-md-8 down-20">
                        <h2>Preencha os campos abaixo</h2>
                        <h4>Todos os dados são de extrema importância, pois serão usados para gerar os certificados dos cursos que você concluir.</h4>
                                <div class="col-md-10">
                                <!-- Main Content -->
                                <div class="status alert alert-success" style="display: none"></div>
                                <br>
                            </div>
                            <!-- Contact Form -->
                            <div class="col-md-8">
                            <form name="contact-form" method="post" action="../php/altera.php">
                                <label class="mini">Nome Completo</label>
                                <div class="row">
                                    <input name="nome" class="form-control" type="text" value="<?=$linha['nome']?>" required>
                                </div><br>
                                <label class="mini">RG (identidade)</label>
                                <div class="row">
                                    <input name="rg" class="form-control" type="text" value="<?=$linha['rg']?>" required>
                                </div><br>
                                <label class="mini">CPF (somente números)</label>
                                <div class="row">
                                    <input name="cpf" class="form-control" type="text" value="<?=$linha['cpf']?>" required>
                                </div><br>
                                <label class="mini">País</label>
                                <div class="row">
                                	<select name="pais" id="codpais" class="form-control"><option value="AFG">Afghanistan</option><option value="ALB">Albania</option><option value="DZA">Algeria</option><option value="ASM">American Samoa</option><option value="AND">Andorra</option><option value="AGO">Angola</option><option value="AIA">Anguilla</option><option value="ATA">Antarctica</option><option value="ARG">Argentina</option><option value="ARM">Armenia</option><option value="ABW">Aruba</option><option value="AUS">Australia</option><option value="AUT">Austria</option><option value="AZE">Azerbaijan</option><option value="BHS">Bahamas</option><option value="BHR">Bahrain</option><option value="BGD">Bangladesh</option><option value="BRB">Barbados</option><option value="BLR">Belarus</option><option value="BEL">Belgium</option><option value="BLZ">Belize</option><option value="BEN">Benin</option><option value="BMU">Bermuda</option><option value="BTN">Bhutan</option><option value="BOL">Bolivia</option><option value="BIH">Bosnia and Herzegovina</option><option value="BWA">Botswana</option><option value="BRA" selected="selected">Brasil</option><option value="VGB">British Virgin Islands</option><option value="BRN">Brunei</option><option value="BGR">Bulgaria</option><option value="BFA">Burkina Faso</option><option value="BDI">Burundi</option><option value="KHM">Cambodia</option><option value="CMR">Cameroon</option><option value="CAN">Canada</option><option value="CPV">Cape Verde</option><option value="CYM">Cayman Islands</option><option value="CAF">Central African Republic</option><option value="CHL">Chile</option><option value="CHN">China</option><option value="COL">Colombia</option><option value="COM">Comoros</option><option value="COK">Cook Islands</option><option value="CRI">Costa Rica</option><option value="HRV">Croatia</option><option value="CUB">Cuba</option><option value="CUW">Curacao</option><option value="CYP">Cyprus</option><option value="CZE">Czech Republic</option><option value="COD">Democratic Republic of Congo</option><option value="DNK">Denmark</option><option value="DJI">Djibouti</option><option value="DMA">Dominica</option><option value="DOM">Dominican Republic</option><option value="TLS">East Timor</option><option value="ECU">Ecuador</option><option value="EGY">Egypt</option><option value="SLV">El Salvador</option><option value="GNQ">Equatorial Guinea</option><option value="ERI">Eritrea</option><option value="EST">Estonia</option><option value="ETH">Ethiopia</option><option value="FLK">Falkland Islands</option><option value="FRO">Faroe Islands</option><option value="FJI">Fiji</option><option value="FIN">Finland</option><option value="FRA">France</option><option value="PYF">French Polynesia</option><option value="GAB">Gabon</option><option value="GMB">Gambia</option><option value="GEO">Georgia</option><option value="DEU">Germany</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GRC">Greece</option><option value="GRL">Greenland</option><option value="GLP">Guadeloupe</option><option value="GUM">Guam</option><option value="GTM">Guatemala</option><option value="GIN">Guinea</option><option value="GNB">Guinea-Bissau</option><option value="GUY">Guyana</option><option value="HTI">Haiti</option><option value="HND">Honduras</option><option value="HKG">Hong Kong</option><option value="HUN">Hungary</option><option value="ISL">Iceland</option><option value="IND">India</option><option value="IDN">Indonesia</option><option value="IRN">Iran</option><option value="IRQ">Iraq</option><option value="IRL">Ireland</option><option value="IMN">Isle of Man</option><option value="ISR">Israel</option><option value="ITA">Italy</option><option value="CIV">Ivory Coast</option><option value="JAM">Jamaica</option><option value="JPN">Japan</option><option value="JOR">Jordan</option><option value="KAZ">Kazakhstan</option><option value="KEN">Kenya</option><option value="KIR">Kiribati</option><option value="XKX">Kosovo</option><option value="KWT">Kuwait</option><option value="KGZ">Kyrgyzstan</option><option value="LAO">Laos</option><option value="LVA">Latvia</option><option value="LBN">Lebanon</option><option value="LSO">Lesotho</option><option value="LBR">Liberia</option><option value="LBY">Libya</option><option value="LIE">Liechtenstein</option><option value="LTU">Lithuania</option><option value="LUX">Luxembourg</option><option value="MAC">Macau</option><option value="MKD">Macedonia</option><option value="MDG">Madagascar</option><option value="MWI">Malawi</option><option value="MYS">Malaysia</option><option value="MDV">Maldives</option><option value="MLI">Mali</option><option value="MLT">Malta</option><option value="MHL">Marshall Islands</option><option value="MRT">Mauritania</option><option value="MUS">Mauritius</option><option value="MEX">Mexico</option><option value="FSM">Micronesia</option><option value="MDA">Moldova</option><option value="MCO">Monaco</option><option value="MNG">Mongolia</option><option value="MNE">Montenegro</option><option value="MSR">Montserrat</option><option value="MAR">Morocco</option><option value="MOZ">Mozambique</option><option value="MMR">Myanmar (Burma)</option><option value="NAM">Namibia</option><option value="NRU">Nauru</option><option value="NPL">Nepal</option><option value="NLD">Netherlands</option><option value="NCL">New Caledonia</option><option value="NZL">New Zealand</option><option value="NIC">Nicaragua</option><option value="NER">Niger</option><option value="NGA">Nigeria</option><option value="NIU">Niue</option><option value="NFK">Norfolk Island</option><option value="PRK">North Korea</option><option value="MNP">Northern Mariana Islands</option><option value="NOR">Norway</option><option value="OMN">Oman</option><option value="PAK">Pakistan</option><option value="PLW">Palau</option><option value="PAN">Panama</option><option value="PNG">Papua New Guinea</option><option value="PRY">Paraguay</option><option value="PER">Peru</option><option value="PHL">Philippines</option><option value="PCN">Pitcairn Islands</option><option value="POL">Poland</option><option value="PRT">Portugal</option><option value="PRI">Puerto Rico</option><option value="QAT">Qatar</option><option value="COG">Republic of the Congo</option><option value="REU">Reunion</option><option value="ROU">Romania</option><option value="RUS">Russia</option><option value="RWA">Rwanda</option><option value="BLM">Saint BarthÃ©lemy</option><option value="SHN">Saint Helena</option><option value="KNA">Saint Kitts and Nevis</option><option value="LCA">Saint Lucia</option><option value="MAF">Saint Martin</option><option value="SPM">Saint Pierre and Miquelon</option><option value="VCT">Saint Vincent and the Grenadines</option><option value="WSM">Samoa</option><option value="SMR">San Marino</option><option value="STP">Sao Tome and Principe</option><option value="SAU">Saudi Arabia</option><option value="SEN">Senegal</option><option value="SRB">Serbia</option><option value="SYC">Seychelles</option><option value="SLE">Sierra Leone</option><option value="SGP">Singapore</option><option value="SVK">Slovakia</option><option value="SVN">Slovenia</option><option value="SLB">Solomon Islands</option><option value="SOM">Somalia</option><option value="ZAF">South Africa</option><option value="KOR">South Korea</option><option value="SSD">South Sudan</option><option value="ESP">Spain</option><option value="LKA">Sri Lanka</option><option value="SDN">Sudan</option><option value="SUR">Suriname</option><option value="SWZ">Swaziland</option><option value="SWE">Sweden</option><option value="CHE">Switzerland</option><option value="SYR">Syria</option><option value="TWN">Taiwan</option><option value="TJK">Tajikistan</option><option value="TZA">Tanzania</option><option value="THA">Thailand</option><option value="TGO">Togo</option><option value="TKL">Tokelau</option><option value="TTO">Trinidad and Tobago</option><option value="TUN">Tunisia</option><option value="TUR">Turkey</option><option value="TKM">Turkmenistan</option><option value="TUV">Tuvalu</option><option value="UGA">Uganda</option><option value="UKR">Ukraine</option><option value="ARE">United Arab Emirates</option><option value="GBR">United Kingdom</option><option value="USA">United States</option><option value="URY">Uruguay</option><option value="UZB">Uzbekistan</option><option value="VUT">Vanuatu</option><option value="VAT">Vatican</option><option value="VEN">Venezuela</option><option value="VNM">Vietnam</option><option value="ESH">Western Sahara</option><option value="YEM">Yemen</option><option value="ZMB">Zambia</option><option value="ZWE">Zimbabwe</option></select>
                                    
                                </div><br>
                                <label class="mini">Endereço</label>
                                <div class="row">
                                    <input name="endereco" class="form-control" type="text" value="<?=$linha['endereco']?>" required>
                                </div><br>
                                <label class="mini">Número</label>
                                <div class="row">
                                    <input name="numero" class="form-control" type="text" value="<?=$linha['numero']?>" required>
                                </div><br>
                                <label class="mini">Complemento</label>
                                <div class="row">
                                    <input name="complemento" class="form-control" type="text" value="<?=$linha['complemento']?>" required>
                                </div><br>
                                <label class="mini">Bairro</label>
                                <div class="row">
                                    <input name="bairro" class="form-control" type="text" value="<?=$linha['bairro']?>" required>
                                </div><br>
                                <label class="mini">CEP</label>
                                <div class="row">
                                    <input name="cep" class="form-control" type="text" value="<?=$linha['cep']?>" required>
                                </div><br>
                                <label class="mini">Cidade</label>
                                <div class="row">
                                    <input name="cidade" class="form-control" type="text" value="<?=$linha['cidade']?>" required>
                                </div><br>
                                <label class="mini">UF</label>
                                <div class="row">
                                    <input name="uf" class="form-control" type="text" value="<?=$linha['uf']?>" required>
                                </div><br>
                                <label class="mini">DDD + telefone</label>
                                <div class="row">
                                    <input name="telefone" class="form-control" type="text" value="<?=$linha['telefone']?>" required>
                                </div><br>
                                <label class="mini">Nova senha</label>
                                <div class="row">
                                    <input name="senha" class="form-control" type="text">(deixe em branco para não alterar)
                                </div><br>
                                <label class="mini">Repetir nova senha</label>
                                <div class="row">
                                    <input name="c_senha" onFocus="" class="form-control" type="text">
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
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
 
</body>
</html>
