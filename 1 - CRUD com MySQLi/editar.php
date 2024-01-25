<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
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
