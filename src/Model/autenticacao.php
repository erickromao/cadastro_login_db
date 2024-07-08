<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION["id"])){
    die("Necessário fazer o login!<br>"."<a href='../../index.php'> Entrar </a>");
}
