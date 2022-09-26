<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Painel</title>
</head>
<body class="LOGIN">
    Bem vindo, <?php echo $_SESSION['nome']; ?>.

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>