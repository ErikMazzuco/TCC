<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "TCC";

//Criar a conexao
$con = mysqli_connect($servidor, $usuario, $senha,
$dbname);

if (mysqli_connect_errno($con)){

    echo "Erro ao conectar com a base de dados: ".
    mysqli_connect_error();
    
    }else{
    
    echo "Conexão Aberta";
    mysqli_close($con);
    }
?>