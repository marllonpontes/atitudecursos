<?php

session_start();  // Inicia a session

include "config.php";

$usuario = $_POST['usuario'];
$senha = sha1($_POST['senha']);

if((!$usuario) || (!$senha)){

	header("Location:../Login.html");

}
else{


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

			if($nivel == 1){
		   	// Redireciona o visitante
      		header("Location: ../Aluno/index.php");
			} else {
				// Redireciona o visitante
      			header("Location: ../adm/index.php");
			}

		}

	}
	else{

		echo "<script>alert('Este E-mail e/ou senha não são válidos! Por favor tente novamente!'); location.href='../Login.html';</script><br/>";

	}
}

?>