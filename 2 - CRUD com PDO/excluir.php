<?php
include 'conexao.php';

$id = $_GET['id'];

try {
    $sql = "DELETE FROM usuarios WHERE id=:id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo "Registro excluído com sucesso.";
} catch (PDOException $e) {
    echo "Erro ao excluir registro: " . $e->getMessage();
}
