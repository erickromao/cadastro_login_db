<?php
require_once "./src/Model/conexao.php";

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $user_verificy = $mysqli->prepare("SELECT * FROM usuario WHERE email = ?");

    if ($user_verificy) {
        $user_verificy->bind_param("s", $email);

        try {

            $user_verificy->execute();
            $user_verificy->store_result();

            if ($user_verificy->num_rows > 0) {

                $user_verificy->bind_result($userID, $emailUser, $password_hash);
                
                $user_verificy->fetch();

                if (password_verify($password, $password_hash)) {
                    if(!isset($_SESSION)){
                        session_start();

                        $_SESSION["id"] = $userID;
                        $_SESSION["email"] = $emailUser;

                        header("Location: ./src/View/painel.php");
                    }
                } else {
                    echo "Email ou senhas incorretas";
                }
            } else {    
                echo "Email ou senhas incorretas";
            }
        } catch (Throwable $err) {
            die("Houve um erro ao fazer login: " . $err->getMessage());
        }

        $user_verificy->close();
    } else {
        die("Houve um erro na consulta ao banco de dados: " . $mysqli->error);
    }

    $mysqli->close();
}



