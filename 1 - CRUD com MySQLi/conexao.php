<?php
// Conexão com o banco de dados MySQL
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'crud_example';

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
