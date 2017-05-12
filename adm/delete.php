<?php

$conexao = mysqli_connect('localhost','root', '', 'usuarios');
$id = $_GET['id'];

$sql = mysqli_query($conexao, "DELETE FROM cursos WHERE id='$id'");
$resultado = mysqli_query($conexao, $sql);

echo "Excluido Com Sucesso!";
echo "<script> URL=javascript=history.back();</script>";
?>