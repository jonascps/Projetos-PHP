<?php
session_start();

// Verificar se o usuário já está logado, redirecionar se estiver
if(isset($_SESSION['usuario'])) {
    header("Location: dashboard.php");
    exit;
}

// Verificar se o formulário foi enviado
if(isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verificar as credenciais (substitua com a lógica de autenticação do seu sistema)
    if($usuario === 'usuario' && $senha === 'senha') {
        $_SESSION['usuario'] = $usuario;
        header("Location: dashboard.php");
        exit;
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($erro)) echo "<p>$erro</p>"; ?>
    <form method="post" action="">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
