<?php

if (isset($_POST["emailCadastro"]) && isset($_POST["passwordCadastro"])) {
    require_once "../Model/conexao.php";

    $email = $_POST["emailCadastro"];
    $senha = $_POST["passwordCadastro"];

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql_code = $mysqli->prepare("INSERT INTO usuario (email, senha) VALUES (?, ?);");
    if ($sql_code) {
        $sql_code->bind_param("ss", $email, $senha_hash);

        try {
            $sql_code->execute();
            echo "<br>Registro feito com sucesso! ";
        } catch (Throwable $err) {
            die("Houve um erro ao cadastrar usuário: " . $err->getMessage());
        }

        $sql_code->close();
    } else {
        die("Houve um erro na consulta ao banco de dados: " . $mysqli->error);
    }

    $mysqli->close();
}
