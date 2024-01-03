<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Saúde Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container-cadastro">
        <div class="slogan">
            <div>
                <h1>Saúde Online</h1>
                <br>
                <h4>Escolha o dia e horário que gostaria de ser atendido e veja os profissionais que estarão a sua disposição!</h4>
            </div>
        </div>
        <div class="box-cadastro">
            <div class="cadastro-form">
                <h1>Crie sua conta</h1>
                <form action="../cadastro/UsersSql.php" method="POST">
                    <label>Nome*</label>
                    <br>
                    <input type="text" name="user" placeholder="Seu Nome Completo">
                    <br>

                    <label>Data de Nascimento*</label>
                    <br>
                    <input type="text" name="date" placeholder="DD/MM/AA">
                    <br>
                    
                    <label>Telefone*</label>
                    <br>
                    <input type="text" name="phone" placeholder="(XX) 9 XXXX-XXXX">
                    <br>
                    
                    <label>Email*</label>
                    <br>
                    <input type="text" name="email" placeholder="Seu E-mail">
                    <br>
                    
                    <label>Senha*</label>
                    <br>
                    <input type="text" name="senha" placeholder="Insira uma senha">
                    <br>
                
                    <input type="submit" name="cadastrar" value="Cadastrar" class="cadastrado">
                    <br>

                    <a href="../index.html">Voltar para o login</a>
                </form>
            </div>
        </div>
    </main>
</body>
</html>