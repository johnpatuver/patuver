<?php

$usuario = 'root';
$senha = '1554';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error); // mensagem de resposta claro se não achar o banco né HEHEH 
}