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
   
    
        

         



            <form action="" class="card-login" method="POST">
            <h1>Entre</h1>
                
                <div class="textfield"> 
                    <label>E-mail</label> 
                    <input type="email" name="email" placeholder="email">
                    </div>
                
                <div class="textfield">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                
                    <button class="btn-login" type="submit">Entrar</button>
                
                    <p>Não tem conta?  <a href="CADASTRO/index.php"><font color="gray">CRIE UMA! </font></a></p>
            </form>
            </div>
     </div>
<div>



<!--
            <div class="right-login">
     <div class="card-login">

                    <h1>LOGIN</h1>
                        
                    <form action="" method="POST">
                    <div class="textfield"> 

                            <label for="usuario">Email</label>
                            <input type="email" name="email" placeholder="email">
                    </div>
                    <div class="textfield">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha"placeholder="Senha">
                    </div>
                <button type="submit" class="btn-login" >Login</button>
</form>

    </div>
            
</div>


-->

           
</body>



</html>