<?php
session_start();

// Verifica se o usuário já está logado
if (isset($_SESSION['usuario'])) {
    header("Location: dashboard.php");
    exit;
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados MySQL utilizando PDO
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'login_example';

    try {
        $conexao = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro na conexão com o banco de dados: " . $e->getMessage());
    }

    // Verifica se as credenciais estão corretas
    $username = $_POST['username'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE username=:username AND senha=:senha";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    // Se as credenciais estiverem corretas, redireciona para a página de dashboard
    if ($stmt->rowCount() == 1) {
        $_SESSION['usuario'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $erro = "Credenciais inválidas.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Nome de Usuário:</label><br>
        <input type="text" name="username" required><br>
        <label>Senha:</label><br>
        <input type="password" name="senha" required><br>
        <input type="submit" value="Login">
    </form>
    <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
</body>

</html>