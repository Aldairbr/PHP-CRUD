<?php
include("../model/model.php");
include("../conexao.php");


if(isset($_POST['btCadastrar'])){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $email = $_POST['email']; 
    $array = array($nome, $telefone, $email, $senha);

            //VARIAVEIS USADAS PARA FAZER DE MANERIA SEM USAR OS (??) no SQL
            // $stmt = $conexao->prepare( $sql );
            // $stmt->bindParam(':nome_produto', $produto);
            // $stmt->bindParam(':descricao_produto', $descricao);
            // $result = $stmt->execute(); 
    insere($conexao, $array);
    header("location: ../index.php");
    
}

print_r($_POST['id']);
if(isset($_POST['btDeletar'])){
    
    $id = $_POST['id'];
    $array = array($id);

    deletar($conexao, $array);
    header("location: ../View/index.php");
}
?>