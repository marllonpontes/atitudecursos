<?php

include "config.php";

$recupera = $_POST['recupera'];
$email = $_POST['email'];

switch($recupera){

	case "recupera":
		recupera_senha($email);
		break;

	default:
		header("Location:../formulario_senha_perdida.html");
		break;
}

function recupera_senha($email){

	if(!isset($email)){

        echo "Você esqueceu de preencher seu email.<br />
			<strong>Use o mesmo email que utilizou em seu cadastro.</strong><br /><br />"; 

		header("Location:../formulario_senha_perdida.html");

		exit();

	}

	// Checando se o email informado está cadastrado
		
	$sqli_check = mysqli_query("SELECT * FROM aluno WHERE email='{$email}'");
	$sqli_check_num = mysqli_num_rows($sqli_check);

	if($sqli_check_num == 0){

		echo "Este email não está cadastrado em nosso banco de dados.<br /><br />";

		include "../formulario_senha_perdida.html";

		exit();

	}
	
	// Se tudo OK vamos gerar uma nova senha e enviar para o email do usuário!

	function makeRandomPassword(){

		$salt = "abchefghjkmnpqrstuvwxyz0123456789";
		srand((double)microtime()*1000000);

		$i = 0;

		while ($i <= 7){

			$num = rand() % 33;
			$tmp = substr($salt, $num, 1);
			$pass = $pass . $tmp;
			$i++;

		}

		return $pass;

	}

	$senha_randomica = makeRandomPassword();

	$senha = sha1($senha_randomica);

	$sql = mysqli_query("UPDATE aluno SET senha='{$senha}' WHERE email ='{$email}'");

	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers .= "From: atitudecursos.org - Webmaster<webmaster@atitudecursos.org>"; //COLOQUE TEU EMAIL

	$subject = "Sua nova senha em atitudecursos.org";
	$message = "Olá, redefinimos sua senha.<br /><br />

	<strong>Nova Senha</strong>: {$senha_randomica}<br /><br />

	<a href='http://www.atitudecursos.org/formulario_login.html'>http://www.atitudecursos.org/formulario_login.html</a><br /><br />

	Obrigado!<br /><br />

	Webmaster<br /><br /><br />


	Esta é uma mensagem automática, por favor não responda!";

	mail($email, $subject, $message, $headers);

	echo "Sua nova senha foi gerada com sucesso e enviada para o seu email!<br />Por favor verifique seu email!<br /><br />";

	include "formulario_login.html";

}

?>
