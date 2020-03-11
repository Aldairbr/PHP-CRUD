<?php
include("../conexao.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>DADOS DO USUARIO</h1><br><br>

    ID: <?php echo $_SESSION['id_usuario']; ?><br>
    NOME: <?php echo $_SESSION['nome_usuario']; ?><br>
    TELEFONE: <?php echo $_SESSION['telefone_usuario']; ?><br>
    EMAIL: <?php echo $_SESSION['email_usuario']; ?><br>
    SENHA: <?php echo $_SESSION['senha_usuario']; ?><br>

    <form action="../Controller/sair.php">
        <input type="submit" value="sair">
    </form>
</head>
<body>
    
</body>
</html>