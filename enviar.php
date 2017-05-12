<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];
$loc = 'javascript:history.back(1)';
if (!$nome || !$email || !$assunto || !$mensagem) {
  echo "<script>alert('Favor preencher os dados corretamente!')</script><br>";
echo "<script>window.location='$loc'</script>";
 }else{
 echo "Ol&aacute; $nome</br></br>
as informa&ccedil;&otilde;es foram enviadas com sucesso!</br>
                          No m&aacute;ximo 48 horas entraremos em contato. Atenciosamente!</br>";

 $mens = "<font size=2 face=Verdana><p align=center>:: Sistema de formulário ::<br><br></p></font>";
 $mens .= "<font size=1 face=Verdana><b>Nome:</b> $nome</font><br><br>";
 $mens .= "<font size=1 face=Verdana><b>E-mail:</b> $email</font><br>";
 $mens .= "<font size=1 face=Verdana><b>Assunto:</b> $assunto</font><br>";
 $mens .= "<font size=1 face=Verdana><b>Mensagem:</b> $mensagem</font><br><br>";

 $headers = "MIME-Version: 1.0\r\n";
 $headers .= "Content-type: text/html; charset = UTF-8\r\n";
 $headers .= "From: 'Formulario'\r\n";
 
   mail("atituderhcursos@gmail.com","Formulario","$mens", $headers);
echo "";
					}
					?>