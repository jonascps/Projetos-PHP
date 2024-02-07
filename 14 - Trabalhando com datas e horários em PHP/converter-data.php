<?php
// Convertendo uma string em um objeto DateTime
$dataString = '2023-12-31';
$data = new DateTime($dataString);

// Exibindo a data formatada
echo "Data: " . $data->format('d/m/Y') . "<br>";
?>
