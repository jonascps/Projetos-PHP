<?php
// Inclua a biblioteca TCPDF
require_once 'vendor/autoload.php';

// Crie uma instância do TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Defina informações do documento
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Seu Nome');
$pdf->SetTitle('Exemplo de PDF com TCPDF');
$pdf->SetSubject('Exemplo de PDF');
$pdf->SetKeywords('TCPDF, PDF, exemplo, PHP');

// Defina margens
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Defina fontes
$pdf->SetFont('dejavusans', '', 14);

// Adicione uma página
$pdf->AddPage();

// Adicione conteúdo ao PDF - Adicione todo Conteúdo desejado
$html = '<h1>Meu Primeiro PDF com TCPDF</h1>
         <p>Este é um exemplo simples de como gerar um PDF usando TCPDF em PHP.</p>';
$pdf->writeHTML($html, true, false, true, false, '');

// Saída do PDF (diretório + nome do arquivo)
$nomeArquivo = 'meu_pdf.pdf';
$pdf->Output($nomeArquivo, 'F');

echo "PDF gerado com sucesso. <a href='$nomeArquivo'>Baixar PDF</a>";
