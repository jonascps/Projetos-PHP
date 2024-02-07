<?php
include 'conexao.php';
include 'funcoes.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verifica se o usuário já existe
    if (userExists($username)) {
        echo "Usuário já existe. Por favor, escolha outro nome de usuário.";
    } else {
        // Registra o novo usuário
        if (registerUser($username, $email, $password)) {
            echo "Registro bem-sucedido. Faça login <a href='login.php'>aqui</a>.";
        } else {
            echo "Erro ao registrar usuário.";
        }
    }
}
?>

<h2>Registro</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Nome de Usuário:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Registrar">
</form>
