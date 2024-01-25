<?php
// Inclua a classe PHPMailer
require 'vendor/autoload.php';

// Crie uma instância do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; // Endereço do servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'seu_email@example.com'; // Seu e-mail
    $mail->Password = 'sua_senha'; // Sua senha de e-mail
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configurações do e-mail
    $mail->setFrom('remetente@example.com', 'Seu Nome'); // Remetente
    $mail->addAddress('destinatario@example.com'); // Destinatário
    $mail->Subject = 'Teste de E-mail';
    $mail->Body = 'Olá, este é um e-mail de teste enviado pelo PHPMailer.';

    // Envio do e-mail
    $mail->send();
    echo "E-mail enviado com sucesso.";
} catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
}
?>
