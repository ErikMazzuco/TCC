<?php
    include('conexao.php');
    if(isset($_POST['email']) || isset($_POST['senha'])) {

        if(strlen($_POST['email']) == 0) {
            echo "Preencha seu e-mail";
        } else if(strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else {
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {
                
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                
$nome = $_SESSION['nome'];
$result = "INSERT INTO logins (nome,datain) VALUES ('$nome',NOW())";

$query = mysqli_query ($mysqli,$result);


                header("Location: ../index.php");

            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
        }
    }
    ?>
    






    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css">
        <title>Login</title>
    </head>

<body> 


    <div class="main-login">
    <div class="right-login">
            <form action="" class="card-login" autocomplete="off" method="POST">

            <h1>ENTRE</h1>
                
                <div class="textfield"> 
                    <label>E-mail</label> 
                    <input type="email" name="email" placeholder="email">
                    </div>
                
                <div class="textfield">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                
                    <button class="btn-login" type="submit">Entrar</button>
                
                    <p><font color="white">Não tem conta?  </font><a href="CADASTRO/index.php"><font color="gray">CRIE UMA! </font></a></p>
                    <?php

//se existir a variavel imprime a variavel global

if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
//unset($_SESSION['msg']); 
}

?>
            </form>
            </div>
     </div>
<div>        
</body>
</html>