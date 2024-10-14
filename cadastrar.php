<?php

include_once('conexao.php');

$name = $_POST['nome'];
$emails = $_POST['email'];
$pass = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$querysql = "INSERT INTO usuario (nome, email, senha) VALUES ('$name', '$emails', '$pass')" or die('Erro ao inserir os dados');

$result = mysqli_query($con, $querysql) or die('Erro ao inserir os dados');

if ($result) {
    session_start();
        $_SESSION['Aprovado'] = true;
        header('Location: list_contacts.php');
} else {
    echo 'Falha ao cadastrar';
}

?>