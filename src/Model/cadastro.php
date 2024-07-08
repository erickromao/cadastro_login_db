<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrar no banco</title>
</head>
<body>
<form action="" method="post">
        <h1>Cadastro</h1>

        <label for="emailCadastroID">Email</label>
        <input type="email" name="emailCadastro" id="emailCadastroID" required><br>

        <label for="passwordCadastroID">Senha</label>
        <input type="password" name="passwordCadastro" id="passwordCadastroID" required><br><br>

        <button type="submit" name="botaoEnviar">Cadastrar</button> ou 
        <a href="../../index.php">Voltar</a>
    </form>
    <?php
        require_once "../Controller/cadastrarUsuario.php";
    ?>
</body>
</html>