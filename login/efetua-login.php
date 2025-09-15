<?php
session_start();

$email = $_POST['email'];
$senha = &$_POST['senha'];

// Simular uma consulta ao banco de dados
if($email == 'admin@gmail.com' && $senha == '1234'){
    $_SESSION['email'] = $email;
    header("location:pagina-interna.php");
}else{
    $_SESSION['msg'] = "Usuário e/ou senha inválidos";
    header("location:login.php");
}
?>