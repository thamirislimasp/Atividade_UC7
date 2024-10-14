<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<section class="login-contatos">   
        <div class="container-login">
            <div>
                <h1>Insira seus dados de login.</h1>
            </div>
            <form class="form-login" action="autenticar.php" method="post">
                <div class="login">
                    <div class="ajustes-form">
                        
                        <label>Email</label>
                        <input type="mail" name="email" id="email-login" placeholder="Digite seu email" required>
                    
                        <label>Senha</label>
                        <input type="password" name="senha" id="senha-login" placeholder="Digite sua senha" required>

                    </div>
 
				</div>
                
				<div class="btn-login2">
                    <div>
                        <button type="submit" id="btn-login">LOGIN</button>
                    </div>                    
                </div>                  
            
                <a href="cadastro.php" id="btn-login">CADASTRAR</a>
                    
                <!-- <a href="list_contacts.php" id="btn-login-voltar">VOLTAR</a>                 -->
 
            </form>             
           
        </div>
</section>
    
</body>
</html>