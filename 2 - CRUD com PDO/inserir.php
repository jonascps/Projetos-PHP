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

    try {
        $sql = "INSERT INTO usuarios (nome, email, idade) VALUES (:nome, :email, :idade)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':idade', $idade);
        $stmt->execute();
        echo "Novo registro inserido com sucesso.";
    } catch(PDOException $e) {
        echo "Erro ao inserir registro: " . $e->getMessage();
    }
}
?>
