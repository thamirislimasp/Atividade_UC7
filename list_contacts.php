<?php
session_start();
if(!$_SESSION['Aprovado']) {
    header('Location: login.php');
}

require_once 'databaseRepository.php';
// $qualquer = "Texto da minha variável";*

$contacts = DatabaseRepository::getAllContacts();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link rel="stylesheet" href="css/listaContatos.css">
</head>

<body>
    <!-- * <p>
        <? //echo $qualquer ?>
    </p>    -->
    <div class="container-lista">
        <h1>Lista de Contatos </h1>
        <a href="add_contacts.php">Adicionar Novo Contato</a>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact): ?>
                    <tr>
                        <td><?= $contact['nome']; ?></td>
                        <td><?= $contact['telefone']; ?></td>
                        <td><?= $contact['email']; ?></td>
                        <td>
                            <a href="edit_contact.php?id=<?= $contact['id']; ?>">Editar</a>
                            <a href="delete_contact.php?id=<?= $contact['id']; ?>" onclick="return confirm('Tem certeza que deseja deletar este contato?');">Deletar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="logout.php">SAIR</a>
    </div>
    

</body>

</html>