<?php
// Incluir arquivo de configuração e funções
include 'conexao.php';
include 'funcoes.php';

// Verificar se o ID do post foi fornecido na URL
if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    // Obter detalhes do post do banco de dados
    $post = getPostById($postId);
    if(!$post) {
        // Se o post não existir, redirecionar para a página inicial
        header('Location: index.php');
        exit();
    }
} else {
    // Se o ID do post não foi fornecido, redirecionar para a página inicial
    header('Location: index.php');
    exit();
}

// Exibir cabeçalho
include 'header.php';
?>

<h2><?php echo $post['titulo']; ?></h2>
<p><?php echo $post['conteudo']; ?></p>
<p>Por <?php echo $post['autor']; ?> em <?php echo formatDate($post['data_publicacao']); ?></p>

<?php
// Exibir formulário de comentário
include 'formulario_comentario.php';

// Obter e exibir comentários relacionados ao post
$comments = getCommentsByPostId($postId);
if($comments) {
    echo '<h3>Comentários</h3>';
    foreach($comments as $comment) {
        echo '<p>De ' . $comment['autor'] . ' em ' . formatDate($comment['data_comentario']) . ': ' . $comment['conteudo'] . '</p>';
    }
}
?>

<?php
// Exibir rodapé
include 'footer.php';
?>
