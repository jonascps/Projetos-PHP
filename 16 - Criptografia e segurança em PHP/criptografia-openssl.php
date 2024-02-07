<?php

$texto = 'dados sensíveis';
$senha = 'senha-secreta';
$criptografado = openssl_encrypt($texto, 'aes-256-cbc', $senha, 0, 'chave-aleatoria'); // função nativa do PHP 
