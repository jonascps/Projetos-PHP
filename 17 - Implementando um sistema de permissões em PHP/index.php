<?php
if (isset($_POST['login'])) {
    require_once 'conexao.php';
    session_start();
    // Verificar se o usuário tem permissão de administrador
    if ($_SESSION['nivel_permissao'] === 1) {
        echo "Acesso de Administrador";
        // Acesso permitido para administradores
        // Código para funcionalidade de administrador aqui
    } else {
        // Acesso negado para usuários sem permissão de administrador
        echo "Você não tem permissão para acessar esta funcionalidade.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel de Acesso Simples</title>
</head>

<body>
    <form action="" method="POST">
        <p>Login <input type="email" name="login"></p>
        <p>Senha <input type="password" name="senha"></p>
        <button type="submit" name="">Entrar</button>
    </form>
</body>

</html>