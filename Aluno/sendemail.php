<?php
session_start();

include("../php/config.php");
protegePagina();

	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Entraremos em contato em ate 48 horas!'
	);

    $name = $_SESSION['nome']; 
    $email = $_SESSION['email']; 
    $subject = @trim(stripslashes($_POST['assunto'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'atituderhcursos@gmail.com';

    $body = 'Nome: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Assunto: ' . $subject . "\n\n" . 'Mensagem: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die; 