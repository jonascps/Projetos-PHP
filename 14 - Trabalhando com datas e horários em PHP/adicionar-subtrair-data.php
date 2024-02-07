<?php
// Criando um objeto DateTime
$data = new DateTime('2023-12-31');

// Adicionando 7 dias
$data->modify('+7 days');

// Subtraindo 1 mês
$data->modify('-1 month');

echo "Nova data: " . $data->format('d/m/Y') . "<br>";
?>
