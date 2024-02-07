<?php
// Criar uma nova imagem em branco
$novaImagem = imagecreatetruecolor(400, 300);

// Definir cor de fundo (opcional)
$fundo = imagecolorallocate($novaImagem, 255, 255, 255);
imagefill($novaImagem, 0, 0, $fundo);

// Salvar a nova imagem
imagejpeg($novaImagem, 'nova_imagem.jpg');

// Liberar memória
imagedestroy($novaImagem);
