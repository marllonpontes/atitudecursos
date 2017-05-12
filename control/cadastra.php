<?php

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = md5($_POST['senha']);

$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysql_query($query_select,$conexao);
$array = mysql_fetch_array($select);
$logarray = $array['email'];

$conexao = mysql_connect('localhost', 'root', '') or die('Sem conxao');
$base = mysql_select_db('usuarios', $conexao) or die('Sem conxao com o banco e dados');

if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='../cadastro.html';</script>";

}else{
    if($logarray == $email){

        echo"<script language='javascript' type='text/javascript'>alert('Esse E-mail já esta cadastrado em nosso sistema');window.location.href='../cadastro.html';</script>";
        die();

    }else{
        $query = "INSERT INTO usuarios (nome,sobrenome,email,senha) VALUES ('$nome','$email','$senha')";
        $insert = mysql_query($query,$conexao);

        if($insert){
            echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../Login.html'</script>";
        }else{
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='../cadastro.html'</script>";
        }
    }
}

?>