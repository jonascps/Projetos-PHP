<?php
require 'autenticacao.php';

// Simulação de autenticação bem-sucedida
$usuarioAutenticado = array('id' => 1, 'nome' => 'Usuário', 'email' => 'usuario@example.com');
$token = gerarToken($usuarioAutenticado);

// Simulação de solicitação para acessar recurso protegido
// Suponha que o token JWT seja passado no cabeçalho Authorization
$solicitacaoAutorizada = verificarToken($token);

if ($solicitacaoAutorizada) {
    echo "Token válido. Recurso protegido acessado com sucesso.";
} else {
    echo "Token inválido. Acesso não autorizado.";
}
?>
