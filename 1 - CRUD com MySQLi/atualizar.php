<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

$sql = "UPDATE usuarios SET nome='$nome', email='$email', idade='$idade' WHERE id=$id";
if ($conexao->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso.";
} else {
    echo "Erro ao atualizar registro: " . $conexao->error;
}
?>
