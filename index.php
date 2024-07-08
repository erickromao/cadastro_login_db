<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com banco</title>
</head>

<body>
    <form action="" method="post">
        <h1>Login com banco de dados</h1>
        <label for="emailID">Email</label>
        <input type="email" name="email" id="emailID" required><br>

        <label for="passwordID">Senha</label>
        <input type="password" name="password" id="passwordID" required><br><br>

        <button type="submit" name="botaoEnviar">Login</button> ou 
        <a href="./src/Model/cadastro.php">Cadastrar</a>
    </form>
    
    <?php
    require_once "./src/Controller/login.php"
    ?>
</body>

</html>