<?php
include 'config.php';
include 'functions.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica as credenciais do usuário
    if (verifyLogin($username, $password)) {
        $_SESSION['username'] = $username;
        header("location: index.php");
    } else {
        echo "Nome de usuário ou senha incorretos.";
    }
}
?>

<h2>Login</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Nome de Usuário:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>
