<?php
// Leitura de XML Existente
$xml = simplexml_load_file('exemplo.xml');
foreach ($xml->children() as $child) {
    echo "Elemento: " . $child->getName() . ", Valor: " . $child . "<br>";
}

// Escrita de Novo XML
$novo_xml = new SimpleXMLElement('<dados></dados>');
$novo_elemento = $novo_xml->addChild('elemento', 'valor');
$novo_elemento->addAttribute('atributo', 'valor');
$novo_xml->asXML('novo_exemplo.xml');
