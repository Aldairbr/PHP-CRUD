<?php
if (isset($_POST['entrar'])) {
    include("../conexao.php");
    session_start();
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($sql);
  
    if($result -> rowcount() > 0){
        while($results = $result -> fetch()) {
            
        $_SESSION['id_usuario'] = $results['id'];
        $_SESSION['nome_usuario'] = $results['nome'];
        $_SESSION['telefone_usuario'] = $results['telefone'];
        $_SESSION['email_usuario'] = $results['email'];
        $_SESSION['senha_usuario'] = $results['senha'];
        }
        header("location: ../View/index.php");
    }else{
        $_SESSION['login_invalido'] = "email ou senha invalidos";
        header("location: ../index.php");
    }
    
    
}
?>