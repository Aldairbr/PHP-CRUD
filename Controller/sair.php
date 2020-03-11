<?php
session_start();
// if(isset($_POST['btSair'])){
// unset($_SESSION['nome']);
// unset($_SESSION['telefone']);
// unset($_SESSION['email']);
// unset($_SESSION['senha']);
// }
session_destroy();
header("location: ../index.php");
?>