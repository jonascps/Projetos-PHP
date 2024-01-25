<?php
// Define o diretório de destino para o upload dos arquivos
$diretorioDestino = "uploads/";

// Verifica se o formulário foi enviado e se o arquivo foi recebido corretamente
if (isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] === UPLOAD_ERR_OK) {
    $nomeArquivo = $_FILES['arquivo']['name'];
    $caminhoArquivoTemp = $_FILES['arquivo']['tmp_name'];

    // Move o arquivo recebido para o diretório de destino
    if (move_uploaded_file($caminhoArquivoTemp, $diretorioDestino . $nomeArquivo)) {
        echo "Arquivo enviado com sucesso. <a href='upload_form.html'>Enviar outro arquivo</a>";
    } else {
        echo "Erro ao mover o arquivo para o diretório de destino.";
    }
} else {
    echo "Erro ao receber o arquivo.";
}
