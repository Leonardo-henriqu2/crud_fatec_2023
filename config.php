<?php

$host = "https://freshmark.000webhostapp.com/"; // nome do servidor MySQL
$user = "id20420990_leonardohenrique"; // usuário do MySQL
$pass = ">~2M/e*mXc>ie-Yx"; // senha do MySQL
$dbname = "id20420990_leonardo1234"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}