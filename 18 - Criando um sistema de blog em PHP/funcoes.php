<?php
// Função para obter todos os posts do banco de dados
function getPosts() {
    global $conn;
    $sql = "SELECT * FROM posts ORDER BY data_publicacao DESC";
    $result = mysqli_query($conn, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $posts;
}

// Função para obter detalhes de um post por ID
function getPostById($postId) {
    global $conn;
    $sql = "SELECT * FROM posts WHERE id = $postId";
    $result = mysqli_query($conn, $sql);
    $post = mysqli_fetch_assoc($result);
    return $post;
}

// Função para formatar a data
function formatDate($date) {
    return date('d/m/Y', strtotime($date));
}

// Função para verificar o login do usuário
function verifyLogin($usuario, $senha) {
    global $conn;
    $senha = md5($senha); // Usando MD5 apenas como exemplo, utilize hash mais seguros
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        return true;
    } else {
        return false;
    }
}

// Função para registrar um novo usuário
function registerUser($usuario, $senha) {
    global $conn;
    $senha = md5($senha); // Usando MD5 apenas como exemplo, utilize hash mais seguros
    $sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')";
    if(mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Função para obter todos os comentários de um post por ID
function getCommentsByPostId($postId) {
    global $conn;
    $sql = "SELECT * FROM comentarios WHERE post_id = $postId ORDER BY data_comentario DESC";
    $result = mysqli_query($conn, $sql);
    $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $comments;
}
?>
