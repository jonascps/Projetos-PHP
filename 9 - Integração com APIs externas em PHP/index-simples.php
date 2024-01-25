<?php
// URL da API externa
$url = 'https://api.example.com/data';

// Parâmetros da requisição (se necessário)
$parametros = array(
    'parametro1' => 'valor1',
    'parametro2' => 'valor2'
);

// Adiciona os parâmetros à URL, se houver
if (!empty($parametros)) {
    $url .= '?' . http_build_query($parametros);
}

// Realiza a requisição à API externa
$resposta = file_get_contents($url);

// Verifica se a requisição foi bem-sucedida
if ($resposta === FALSE) {
    echo "Erro ao acessar a API externa.";
} else {
    // Processa os dados recebidos (aqui você pode converter JSON, XML, etc.)
    $dados = json_decode($resposta, true);

    // Exibe os dados
    print_r($dados);
}
?>
