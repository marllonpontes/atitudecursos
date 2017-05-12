<?php

session_start();  // Inicia a session

include "config.php";

$search = $_GET['search'];

if((!$search)){

	header("Location:../certificado.html");

}
else{

	$sql = mysqli_query($conexao, "SELECT * FROM certificado WHERE keyword LIKE '%" . $search . "%'");
	$check = mysqli_num_rows($sql);

	if($check > 0){

		while($row = mysqli_fetch_array($sql)){

			foreach( $row AS $key => $val ){

				$$key = stripslashes( $val );

			}
		//capturar dados do usuario
		
			$_SESSION['keyword'] = $keyword;
			$_SESSION['course'] = $course;
			$_SESSION['description'] = $description;
			$_SESSION['data_inicio'] = $data_inicio;
			$_SESSION['data_fim'] = $data_fim;
			$_SESSION['address'] = $address;
			
		
		//pagina de resultado da busca
			header("Location:../certificacao.php");

		}

	}
	else{

		echo "<script>alert('Os dados inserido são inválidos! Por favor verifique e tente novamente!'); location.href='../certificado.html';</script><br/>";

	}
}

?>