<?php
include("../conexao.php");

function listar($conexao){

    try {
        $query = $conexao->prepare("SELECT * FROM usuarios");
        $query->execute();
        $usuarios = $query->fetchAll(); 
        return $usuarios;
    }catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }
}
function insere($conexao, $array){
    ///
   try{
    $usuarios = $conexao->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (?, ?, ?, ?)");
    $query = $usuarios->execute($array);
    
    return $query;
   
    }catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }
}

function alterarUsuario($conexao, $array){
    try {
        $usuarios = $conexao->prepare("UPDATE usuarios
                                       SET nome = ?, telefone = ?, email = ?, senha = ? 
                                       WHERE id = ?");
        $query = $usuarios->execute($array);   
        return $query;
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function deletar($conexao, $array){
    try {
        $usuarios = $conexao->prepare("DELETE FROM usuarios 
                                       WHERE id = ?");
        $query = $usuarios->execute($array);   
         return $query;
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>