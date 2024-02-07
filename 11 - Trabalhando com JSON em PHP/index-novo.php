<?php
// Criar um novo documento XML
$novoXML = new SimpleXMLElement('<dados></dados>');

// Adicionar elementos e atributos
$novoElemento = $novoXML->addChild('elemento', 'valor');
$novoElemento->addAttribute('atributo', 'valor');

// Salvar o novo XML em um arquivo
$novoXML->asXML('novo_exemplo.xml');

echo "Novo XML criado com sucesso.";
