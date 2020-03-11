<?php
include("../conexao.php");
include("../Model/model.php");
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
    <?php 
        echo "Usuario Logado: ". $_SESSION['nome_usuario'];
        $result = listar($conexao);
                foreach($result as $usuario) {
    ?>

    <br><hr><br>
        <form action="../Controller/Controller.php" method="POST">
            ID: <?php echo $usuario['id']; ?><br>
            NOME: <?php echo $usuario['nome']; ?><br>
            TELEFONE: <?php echo $usuario['telefone']; ?><br>
            EMAIL: <?php echo $usuario['email']; ?><br>
            SENHA: <?php echo $usuario['senha']; ?><br>
                    
            <input type="hidden" name="id" value="<?php echo $usuario['id'];?>">        
            <input type="submit" value="Deletar" name="btDeletar">
        </form>
    <?php }?>
    <hr><br>
    <form action="../Controller/sair.php">
        <input type="submit" value="sair">
    </form>
</head>
<body>
    
</body>
</html>