<?phpsession_start();
if(!$_SESSION['Aprovado']) {
    header('Location: list_contacts.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
<section class="cadastro-contatos">   
        <div class="container-cadastro">
            <div>
                <h1>Insira seus dados de cadastro.</h1>
            </div>
            <form class="form-cadastro" action="cadastrar.php" method="post">
                <div class="cadastro">
                        <div class="ajustes-form">

                        <label>Nome</label>
                        <input type="name" name="nome" id="nome-cadastro" placeholder="Digite seu email" required>

                        <label>Email</label>
                        <input type="mail" name="email" id="email-cadastro" placeholder="Digite seu email" required>
                    
                        <label>Senha</label>
                        <input type="password" name="senha" id="senha-cadastro" placeholder="Digite sua senha" required>

                        
                        </div>
 
				</div>
                
				<div class="btn-cadastro">
                    <div>
                        <button href="list_contacts.php" type="submit" id="btn-cadastro">CADASTRO</button> 
                    </div>
                    <div>
                        <a href="list_contacts.php" id="btn-cadastro-voltar">VOLTAR</a>
                    </div>
                </div>
                			
            </form>
           
        </div>
    
</body>
</html>