<?php 
include("conexao.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Página de Entrada</h1>

<?php 
    echo $_SESSION['login_invalido'];
?>

<div>

<h2>Login</h2>
    <!-- <input type="text" placeholder="Nome">
    <input type="text" placeholder="Telefone">
    <input type="text" placeholder="E-mail">
    <input type="text" placeholder="Senha"> -->
    <form action="Controller/confirma_login.php" method="POST">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Senha" name="senha">
        <input type="submit" name="entrar" value="Entrar">
        <a href="View/Cadastra_usuario.php">cadastrar novo usuario</a>
    </form>
</div>
    
</body>
</html>


