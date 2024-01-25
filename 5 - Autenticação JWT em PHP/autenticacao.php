<?php
require 'vendor/autoload.php';
use Firebase\JWT\JWT;

// Chave secreta para assinatura do token JWT
$chaveSecreta = 'sua_chave_secreta';

// Função para gerar token JWT para um usuário autenticado
function gerarToken($usuario) {
    global $chaveSecreta;
    $token = array(
        'iss' => 'https://seu_site.com', // Emissor do token
        'aud' => 'https://seu_site.com', // Audiência do token
        'iat' => time(), // Data de emissão do token
        'exp' => time() + (60 * 60), // Data de expiração do token (1 hora)
        'dados' => array(
            'id' => $usuario['id'],
            'nome' => $usuario['nome'],
            'email' => $usuario['email']
        )
    );
    return JWT::encode($token, $chaveSecreta);
}

// Função para verificar e decodificar um token JWT
function verificarToken($token) {
    global $chaveSecreta;
    try {
        $dados = JWT::decode($token, $chaveSecreta, array('HS256'));
        return $dados->dados;
    } catch (Exception $e) {
        return false; // Token inválido
    }
}
?>
