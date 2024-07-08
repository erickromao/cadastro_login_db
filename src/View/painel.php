<?php
    require_once "../Model/autenticacao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Bem-vindo ao seu painel</h1>
    <p>Usuário: <?php echo $_SESSION["email"]; ?></p><br><br>

    <a href="../Model/logout.php">Logout</a>
</body>
</html>