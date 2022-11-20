<?php
$usuario = 'b7bc46cebf8f19';
$senha = 'edc47d25';
$database = 'heroku_cbfcda902c1a722';
$host = 'us-cdbr-east-06.cleardb.net';

$mysqli = new mysqli($host, $usuario, $senha, $database);
//if($mysqli->error) {
 //   die("Falha ao conectar ao banco de dados: " . $mysqli->error);
//}else{
//echo "Conexão Aberta";
//}
?>