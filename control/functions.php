<?php

function session_checker(){

	if(!isset($_SESSION['ID'])){

		header ("Location: ../Login.html");

		exit(); 
	}
}

function verifica_email($EMAIL){

    list($User, $Domain) = explode("@", $EMAIL);
    $result = @checkdnsrr($Domain, 'MX');

    return($result);

}

?>