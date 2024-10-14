<?php

include_once('conexao.php');

$emails = $_POST['email'];
$pass = $_POST['senha'];

$querysql = "SELECT * FROM usuario WHERE email='$emails'" or die('Erro ao logar');

$result = mysqli_query($con, $querysql) or die('Erro ao logar');

if ($result) {
    $dados = $result->fetch_assoc();
    if(!$dados){
        echo 'Usuário ou senha inválido';
    } else {
        if(password_verify($pass, $dados['senha'])) {
            session_start();
            $_SESSION['Aprovado'] = true;
            header('Location: list_contacts.php');
        } else {
            echo 'Usuário ou senha inválido';
        }
    } 
} else {
    echo 'Falha ao cadastrar';
}

?>