<?php

	include "php/config.php";
	
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Mensagem enviada com sucesso!'
	);

	/*

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'atituderhcursos@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
	*/
	
	
	$name =$_POST['name']; 
    $email =$_POST['email']; 
    $message =$_POST['message']; 
	
				// Inserindo os dados no banco de dados

				$sql = mysqli_query($conexao, "INSERT INTO mensagem (name, email, message, date) 
													VALUES('{$name}', '{$email}', '{$message}', now())") 
									or die( mysql_error() );
									header("Location:../index.php");
									
	

?>
	
	
	