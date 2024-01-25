<form action="inserir.php" method="POST">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    Idade: <input type="number" name="idade"><br>
    <input type="submit" value="Inserir">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    $sql = "INSERT INTO usuarios (nome, email, idade) VALUES ('$nome', '$email', '$idade')";
    if ($conexao->query($sql) === TRUE) {
        echo "Novo registro inserido com sucesso.";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }
}
?>
