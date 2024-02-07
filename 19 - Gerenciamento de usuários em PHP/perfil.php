<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}

include 'config.php';
include 'functions.php';

$username = $_SESSION['username'];
$user = getUserByUsername($username);
?>

<h2>Perfil do Usuário</h2>
<p>Nome de Usuário: <?php echo $user['username']; ?></p>
<p>E-mail: <?php echo $user['email']; ?></p>
<p><a href="update_profile.php">Atualizar Perfil</a></p>
<p><a href="logout.php">Logout</a></p>
