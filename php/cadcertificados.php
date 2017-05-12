<?php

include "config.php";

header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Mensagem enviada com sucesso!'
	);

$keyword =$_POST['keyword'];
$course =$_POST['course'];
$description =$_POST['description'];
$datainicio =$_POST['datainicio'];
$datafim =$_POST['datafim'];
$address =$_POST['address'];

	if($keyword == '' || $course == '' || $description == '' || $datainicio == '' || $datafim == '' || $address == '') {
		
		echo("<script>alert('Nenhum dos campos pode ficar em branco. Por favor verifique e tente novamente!'); location.href='../Aluno/certificados.php';</script>");
		
	} else{
		
		$rsd = mysqli_query($conexao, "SELECT keyword FROM certificado WHERE keyword = '$keyword'");
		$msg = mysqli_num_rows($rsd);
		
		if($msg > 0) {
			
			echo("<script>alert('Já existe um certificado cadastrado com esse keyword. Por favor verifique e tente novamente!'); location.href='../adm/certificados.php';</script>");
		} else {

           
				// Inserindo os dados no banco de dados

				$sql = mysqli_query($conexao, "INSERT INTO certificado (keyword, course, description, data_inicio, data_fim, address, data_cadastro) 
									VALUES('{$keyword}', '{$course}', '{$description}', '{$datainicio}', '{$datafim}', '{$address}', now())") 
									or die( mysql_error() );
									//echo json_encode($status);
    								//echo("<script>alert('Cerificado cadastrado com sucesso!');</alert>");
									header("Location:../adm/certificados.php");
									
									
		}
		}	 
		

?>