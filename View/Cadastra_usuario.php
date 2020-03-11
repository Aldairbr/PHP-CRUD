<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>CADASTRO DE USUARIOS</H1>
    <div>
        <form action="../Controller/Controller.php" method="post">
            <input type="text"  placeholder="Nome" name="nome">
            <input type="text" placeholder="Telefone" name="telefone">
            <input type="email" placeholder="E-mail" name="email">
            <input type="text" placeholder="Senha" name="senha">
            <input type="submit" value="Cadastrar" name="btCadastrar">
        </form>
    </div>
</body>
</html>