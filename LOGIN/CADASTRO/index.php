<?php
//inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width">
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title> Cadastrar: </title>
</head>
<body>

<!--

//se existir a variavel imprime a variavel global

if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']); //destroi a variavel global
}

-->
<div class="main">
    <div class="center">

        <form  method="post" class="card-cadastro" action="processa.php">
            <h1>Criar Conta</h1>

            <div class="textfield"> 
            <label>Nome: </label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required><br><br>
            </div>

            <div class="textfield"> 
            <label>E-mail: </label>
            <input type="email" id="email" name="email" placeholder="Digite o seu e-mail" required><br><br>
            </div>

            <div class="textfield"> 
            <label>SENHA: </label>
            <input type="password" id="senha" name="senha" placeholder="Digite uma senha" required><br><br>
            </div>

            <input type="submit" class="btn-cadastro" value="Criar Minha Conta">

            <p>Já possui conta? <a href="../index.php"><font color="gray">Entre</a></p></font>

            <center>
            <p>Ao criar uma conta você concorda com os
            <a href="http://tcc-2022.herokuapp.com/PRIVACY/"><font color="gray">Termos e Politica de Privacidade</a>
        </form>
    </div>
</div>
</body>
</html>