<?php
session_start();

// Inicializar o carrinho se ainda não existir
if(!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

// Adicionar item ao carrinho
if(isset($_POST['adicionar'])) {
    $id = $_POST['id'];
    $_SESSION['carrinho'][] = $id;
}

// Obter detalhes dos produtos adicionados ao carrinho
$produtosCarrinho = array();
foreach($_SESSION['carrinho'] as $id) {
    foreach($produtos as $produto) {
        if($produto['id'] == $id) {
            $produtosCarrinho[] = $produto;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
</head>
<body>
    <h2>Carrinho de Compras</h2>
    <ul>
        <?php foreach($produtosCarrinho as $produto): ?>
        <li>
            <?php echo $produto['nome']; ?> - R$ <?php echo number_format($produto['preco'], 2); ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <a href="produtos.php">Continuar comprando</a>
</body>
</html>
