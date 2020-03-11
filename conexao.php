<?php
    // define( 'MYSQL_HOST', 'localhost' );
    // define( 'MYSQL_USER', 'root' );
    // define( 'MYSQL_PASSWORD', '' );
    // define( 'MYSQL_DB_NAME', 'bdusuarios' );

    $user = 'root';
    $password = ''; 
    try {
        $conexao = new PDO( 'mysql:host=localhost; dbname=usuarios', $user, $password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e) {
                
                echo 'Error: ' . $e->getMessage();
            }
?>