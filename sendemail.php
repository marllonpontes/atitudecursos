<?php
	
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Mensagem enviada com sucesso!'
	);

    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $subject = $_POST['subject']; 
    $message = $_POST['message']; 

    $email_from = $email;
    $email_to = 'atituderhcursos@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;

?>
