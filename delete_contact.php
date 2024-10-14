<?php

require_once 'DatabaseRepository.php';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
DatabaseRepository::deleteContact($nome, $telefone, $email);
header('Location: list_contacts.php');
exit;

?>