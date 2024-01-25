<?php

// Exemplo usando file_get_contents()
$resposta = file_get_contents('https://api.example.com/data');
$dados = json_decode($resposta, true);
print_r($dados);

// Exemplo usando cURL
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://api.example.com/data');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$resposta = curl_exec($curl);
curl_close($curl);
$dados = json_decode($resposta, true);
print_r($dados);
