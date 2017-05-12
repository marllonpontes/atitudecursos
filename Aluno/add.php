<?php
session_start();

include("../php/config.php");

$id = $_GET['id'];

$sql = mysqli_query($conexao,"SELECT id,nome,link,descricao,categoria,page FROM cad_cursos WHERE id= '$id'");
$valor = mysqli_fetch_array($sql);

    $code = $_SESSION['id'];
    $nota = 0;
    $curso = $valor['nome'];
    $link = $valor['page'];
    $img = $valor['link'];

$rsd = mysqli_query($conexao, "SELECT curso FROM cursos WHERE curso = '$curso' AND code = '$code' ");
$msg = mysqli_num_rows($rsd);

if($msg > 0) {

    echo("<script>alert('Voce ja possui esse curso'); URL=javascript=history.back();</script>");
} else {

    // Inserindo os dados no banco de dados

    $sql = mysqli_query($conexao, "INSERT INTO cursos (code, curso, link, nota, img) VALUES('{$code}', '{$curso}', '{$link}', '{$nota}', '{$img}')")
    or die( mysql_error() );
    echo "<script> URL=javascript=history.back();</script>";
}
?>