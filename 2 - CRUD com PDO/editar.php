<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=:id";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
?>
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        Idade: <input type="number" name="idade" value="<?php echo $row['idade']; ?>"><br>
        <input type="submit" value="Atualizar">
    </form>
<?php
} else {
    echo "Usuário não encontrado.";
}
?>
