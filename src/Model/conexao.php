<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "login";

$mysqli = new mysqli($host, $username, $password, $database);

if($mysqli->error){
    die("Houve um erro ao conectar ao banco e dados".$mysqli->error);
}