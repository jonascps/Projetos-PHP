<?php
// Criando objetos DateTime para as duas datas
$data1 = new DateTime('2023-12-31');
$data2 = new DateTime('2023-01-01');

// Calculando a diferença entre as datas
$diferenca = $data1->diff($data2);

// Exibindo a diferença
echo "Diferença: " . $diferenca->days . " dias<br>";
?>
