<?php

session_start();  // Inicia a session

include "config.php";

$nome =$_POST['nome'];
$email = $_SESSION['email'];
$rg =$_POST['rg'];
$cpf =$_POST['cpf'];
$pais =$_POST['pais'];
$endereco =$_POST['endereco'];
$numero =$_POST['numero'];
$complemento =$_POST['complemento'];
$bairro =$_POST['bairro'];
$cep =$_POST['cep'];
$cidade =$_POST['cidade'];
$uf =$_POST['uf'];
$telefone =$_POST['telefone'];
$senha =($_POST['senha']);
$c_senha =($_POST['c_senha']);

if($nome == '' || $rg == '' || $cpf == '' || $pais == '' || $endereco == '' || $numero == '' || $complemento == '' || $bairro == '' || $cep == '' || $cidade == '' || $uf == '' || $telefone == '' ) {  
		echo("<script>alert('Nenhum dos campos podem ficar em branco. Verifique e tente novamente!'); location.href='../Aluno/dados.php';</script>");
} else {
		//if ($senha == '' || $c_senha == '') {
			// Inserindo os dados no banco de dados

				$sql = mysqli_query($conexao, "UPDATE aluno SET nome='{$nome}', rg='{$rg}', cpf='{$cpf}', pais='{$pais}', endereco='{$endereco}', numero='{$numero}', complemento='{$complemento}', bairro='{$bairro}', cep='{$cep}', cidade='{$cidade}', uf='{$uf}', telefone='{$telefone}' WHERE email = '$email'") 
									or die( mysql_error());
				if($senha != '' || $c_senha != ''){
						if ($senha == $c_senha) {
							$sql = mysqli_query($conexao, "UPDATE aluno SET senha=sha1('{$senha}') WHERE email = '$email'") 
				
									or die( mysql_error() );
									header("Location:../Aluno/dados.php");
								
						} else {
							echo("<script>alert('Confirmação de senha incorreta! Por favor verifique e tente novamente.'); location.href='../Aluno/dados.php';</script>");	
						}
				} else {
					header("Location:../Aluno/dados.php");
				}
										
		/*} else {
			if ($senha == $c_senha) {
           
				// Inserindo os dados no banco de dados

				$sql = mysqli_query($conexao, "UPDATE aluno SET nome='{$nome}', rg='{$rg}', cpf='{$cpf}', pais='{$pais}', endereco='{$endereco}', numero='{$numero}', complemento='{$complemento}', bairro='{$bairro}', cep='{$cep}', cidade='{$cidade}', uf='{$uf}', telefone='{$telefone}', senha=sha1('{$senha}') WHERE email = '$email'") 
				
									or die( mysql_error() );
									header("Location:../Aluno/dados.php");
		
	
		} else {
	
			echo("<script>alert('Confirmação de senha incorreta! Por favor verifique e tente novamente.'); location.href='../Aluno/dados.php';</script>");
	
		}	*/
		}

		
//}

?>