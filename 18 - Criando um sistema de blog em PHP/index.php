<?php
// Incluir arquivo de configuração e funções
include 'conexao.php';
include 'funcoes.php';

// Obter todos os posts do banco de dados
$posts = getPosts();

// Exibir cabeçalho
include 'header.php';
?>

<h2>Últimos Posts</h2>
<ul>
    <?php foreach($posts as $post): ?>
        <li>
            <a href="post.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a>
            <p>Por <?php echo $post['autor']; ?> em <?php echo formatDate($post['data_publicacao']); ?></p>
        </li>
    <?php endforeach; ?>
</ul>

<?php
// Exibir rodapé
include 'footer.php';
?>
