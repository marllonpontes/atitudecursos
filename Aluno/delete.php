<?php

include("../php/config.php");
$id = $_GET['id'];

$sql = mysqli_query($conexao, "DELETE FROM cursos WHERE id='$id'");
$resultado = mysqli_query($conexao, $sql);

echo "<script> URL=javascript=history.back();</script>";
?>
