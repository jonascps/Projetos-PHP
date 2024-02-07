<?php
// Incluir arquivo de configuração e funções
include 'conexao.php';
include 'funcoes.php';

// Verificar se o usuário já está logado, redirecionar se estiver
if(isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

// Verificar se o formulário de login foi enviado
if(isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verificar as credenciais
    if(verifyLogin($usuario, $senha)) {
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
        exit;
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}

// Exibir cabeçalho
include 'header.php';
?>

<h2>Login</h2>
<?php if(isset($erro)) echo "<p>$erro</p>"; ?>
<form method="post" action="">
    <label for="usuario">Usuário:</label>
    <input type="text" id="usuario" name="usuario" required><br><br>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
// Exibir rodapé
include 'footer.php';
?>
