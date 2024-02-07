<?php
session_start();

// Array de produtos de exemplo e você pode implementar dados do banco de dados.
$produtos = array(
    array('id' => 1, 'nome' => 'Produto A', 'preco' => 5.00),
    array('id' => 2, 'nome' => 'Produto B', 'preco' => 10.00),
    array('id' => 3, 'nome' => 'Produto C', 'preco' => 15.00)
);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
</head>

<body>
    <h2>Produtos</h2>
    <ul>
        <?php foreach ($produtos as $produto) : ?>
            <li>
                <?php echo $produto['nome']; ?> - R$ <?php echo number_format($produto['preco'], 2); ?>
                <form action="carrinho.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
                    <input type="submit" name="adicionar" value="Adicionar ao Carrinho">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>