<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

try {
    $sql = "UPDATE usuarios SET nome=:nome, email=:email, idade=:idade WHERE id=:id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':idade', $idade);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo "Registro atualizado com sucesso.";
} catch(PDOException $e) {
    echo "Erro ao atualizar registro: " . $e->getMessage();
}
?>
