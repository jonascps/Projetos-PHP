<?php
// Carregar a imagem existente
$imagem = imagecreatefromjpeg('imagem.jpg');

// Aplicar filtro sépia
imagefilter($imagem, IMG_FILTER_GRAYSCALE);
imagefilter($imagem, IMG_FILTER_COLORIZE, 100, 50, 0); // Adicionar tonalidade de sépia. pode obter outro tipos 

// Salvar a imagem modificada
imagejpeg($imagem, 'imagem_sepia.jpg');

// Liberar memória
imagedestroy($imagem);

