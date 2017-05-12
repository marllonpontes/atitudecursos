<?php

include "config.php";

header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Mensagem enviada com sucesso!'
	);

$nome =$_POST['nome'];
$descricao =$_POST['descricao'];
$link =$_POST['link'];
$categoria =$_POST['categoria'];
$page =$_POST['page'];

	if($nome == '' || $descricao == '' || $link == '' || $categoria == '' || $page == '') {
		
		echo("<script>alert('Nenhum dos campos pode ficar em branco. Por favor verifique e tente novamente!'); location.href='../adm/cursos.php';</script>");
		
	} else{
		
		$rsd = mysqli_query($conexao, "SELECT page FROM cad_cursos WHERE page = '$page'");
		$msg = mysqli_num_rows($rsd);
		
		if($msg > 0) {
			
			echo("<script>alert('Já existe um curso cadastrado com essa pagina. Por favor verifique e tente novamente!'); location.href='../adm/cursos.php';</script>");
		} else {

           
				// Inserindo os dados no banco de dados

				$sql = mysqli_query($conexao, "INSERT INTO cad_cursos (nome, descricao, link, categoria, page) 
									VALUES('{$nome}', '{$descricao}', '{$link}', '{$categoria}', '{$page}')") 
									or die( mysql_error() );
									//echo json_encode($status);
    								//echo("<script>alert('Cerificado cadastrado com sucesso!');</alert>");
									header("Location:../adm/cursos.php");
									
									
		}
		}	 
		

?>