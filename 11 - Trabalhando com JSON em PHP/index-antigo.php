<?php
// Carregar o arquivo XML existente
$xmlString = file_get_contents('exemplo.xml');
$xml = simplexml_load_string($xmlString);

// Acessar os elementos do XML
foreach ($xml->children() as $child) {
    echo "Elemento: " . $child->getName() . ", Valor: " . $child . "<br>";
}
?>
