<?php
// Conexão com o banco de dados MySQL utilizando PDO
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'api_example';

try {
    $conexao = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>
