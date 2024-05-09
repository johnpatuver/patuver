<?php
// Verificar se o parâmetro 'file' está presente na URL
if(isset($_GET['file'])) {
    // Obter o nome do arquivo a ser baixado
    $filename = $_GET['file'];
    
    // Diretório onde os arquivos estão armazenados
    $directory = 'uploads/';
    
    // Caminho completo do arquivo
    $filepath = $directory . $filename;
    
    // Verificar se o arquivo existe
    if(file_exists($filepath)) {
        // Definir cabeçalhos para forçar o download do arquivo
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        
        // Ler o arquivo e enviá-lo para o navegador
        readfile($filepath);
        exit;
    } else {
        echo 'Arquivo não encontrado.';
    }
} else {
    echo 'Nome do arquivo não especificado.';
}
?>
