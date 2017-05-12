<?php

include "config.php";

$nome =$_POST['nome'];
$telefone =$_POST['telefone'];
$celular =$_POST['celular'];
$email =$_POST['email'];
$senha =sha1($_POST['senha']);
$c_senha =sha1($_POST['c_senha']);


if ($senha == $c_senha) {
	if($telefone == '' || $celular == '') {
		if($telefone == '') {
			$telefone = 0000-0000;
		} else {$telefone =$_POST['telefone'];}
		if($celular == '') {
			$celular = 0000-0000;
		} else {$celular =$_POST['celular'];}
	 
		
		$rsd = mysqli_query($conexao, "SELECT email FROM aluno WHERE email = '$email' ");
		$msg = mysqli_num_rows($rsd);
		
		if($msg > 0) {
			
			echo("<script>alert('Já existe uma conta com esse E-mail!'); location.href='../cadastro.html';</script>");
		} else {

           
				// Inserindo os dados no banco de dados

				$sql = mysqli_query($conexao, "INSERT INTO aluno (nome, telefone, celular, email, senha, cadastro, data_ultimo_login) 
									VALUES('{$nome}', '{$telefone}', '{$celular}', '{$email}', '{$senha}', now(), now())") 
									or die( mysql_error() );
									
				$sql = mysqli_query($conexao, "SELECT * FROM aluno WHERE email='{$usuario}' AND senha='{$senha}'");
	$login_check = mysqli_num_rows($sql);

	if($login_check > 0){

		while($row = mysqli_fetch_array($sql)){

			foreach( $row AS $key => $val ){

				$$key = stripslashes( $val );

			}

			$_SESSION['id'] = $id;
			$_SESSION['nome'] = $nome;
			$_SESSION['email'] = $email;
			$_SESSION['data_ultimo_login'] = $data_ultimo_login;
			$_SESSION['nivel'] = $nivel;
		
			mysqli_query($conexao, "UPDATE aluno SET data_ultimo_login = now() WHERE id ='{$id}'");

			

		}
	}

									
									header("Location:../Aluno/sucesso.php");
		}
	}
} else {
	
	echo("<script>alert('Confirmação de senha incorreta!'); location.href='../cadastro.html';</script>");
	
	}

?>