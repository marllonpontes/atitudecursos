
<?php

$conexao = mysql_connect('localhost', 'root', '') or die('Sem conxao');
$base = mysql_select_db('usuarios', $conexao) or die('Sem conxao com o banco e dados');


?>