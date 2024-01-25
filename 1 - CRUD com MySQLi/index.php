<?php
include 'conexao.php';

// Consulta SQL para obter todos os usuários
$sql = "SELECT * FROM usuarios";
$resultado = $conexao->query($sql);

// Exibindo os resultados em uma tabela HTML
if ($resultado->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Nome</th><th>Email</th><th>Idade</th></tr>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["email"]."</td><td>".$row["idade"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum usuário encontrado.";
}
?>
