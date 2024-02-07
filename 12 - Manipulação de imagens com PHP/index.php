<?php
/* Edição  2 */
// Caminho da imagem existente
$caminhoImagem = 'imagem.jpg';

// Carregar a imagem
$imagem = imagecreatefromjpeg($caminhoImagem);

// Exibir a imagem (opcional)
header('Content-Type: image/jpeg');
imagejpeg($imagem);


