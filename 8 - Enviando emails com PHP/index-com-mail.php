<?php
// Parâmetros do e-mail
$para = "destinatario@example.com";
$assunto = "Teste de E-mail";
$mensagem = "Olá, este é um e-mail de teste enviado pelo PHP.";

// Cabeçalhos do e-mail
$cabecalhos = "From: remetente@example.com\r\n";
$cabecalhos .= "Reply-To: remetente@example.com\r\n";
$cabecalhos .= "MIME-Version: 1.0\r\n";
$cabecalhos .= "Content-Type: text/html; charset=UTF-8\r\n";

// Envio do e-mail
if(mail($para, $assunto, $mensagem, $cabecalhos)) {
    echo "E-mail enviado com sucesso.";
} else {
    echo "Erro ao enviar o e-mail.";
}
?>
