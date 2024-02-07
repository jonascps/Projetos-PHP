<?php

// Carregar a imagem existente
$imagem = imagecreatefromjpeg('imagem.jpg');

// Definir novas dimensões
$novaLargura = 200;
$novaAltura = 150;

// Redimensionar a imagem
$novaImagem = imagescale($imagem, $novaLargura, $novaAltura);

// Salvar a nova imagem
imagejpeg($novaImagem, 'imagem_redimensionada.jpg');

// Liberar memória
imagedestroy($novaImagem);
