<?php
//inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width">
<meta charset="utf-8">
<link rel="stylesheet" href="../style.css">
<title> Cadastrar: </title>

</head>
<body>
<div class="LOGIN">
<h1>Criar Conta</h1>
<?php

//se existir a variavel imprime a variavel global

if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']); //destroi a variavel global
}

?>
<form  method="post" action="processa.php">
<label>Nome: </label>
<input type="text" id="nome" name="nome" placeholder="Digite o nome completo"><br><br>

<label>E-mail: </label>
<input type="email" id="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>

<label>SENHA: </label>
<input type="password" id="senha" name="senha" placeholder="Digite uma senha"><br><br>

<input type="submit" value="Criar Conta">

</form>

<a href="../index.php">Voltar</a>

</div>

</body>

</html>