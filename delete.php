<?php
$fileToDelete = $_POST['fileToDelete'];
$filePath = "uploads/" . $fileToDelete;
if (file_exists($filePath)) {
    unlink($filePath);
    echo "Arquivo excluído com sucesso: " . $fileToDelete;
} else {
    echo "Erro ao excluir o arquivo: " . $fileToDelete;
}
?>
<?php
$usuario = 'root';
$senha = '1554';
$database = 'login';
$host = 'localhost';

// Conectar ao banco de dados MySQL
$conn = new mysqli($host, $usuario, $senha, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Verificar se o ID do arquivo foi enviado
if (isset($_POST['fileId']) && isset($_POST['fileToDelete'])) {
    $fileId = $_POST['fileId'];
    $fileToDelete = $_POST['fileToDelete'];

    // Excluir o arquivo do banco de dados
    $sql = "DELETE FROM uploads WHERE id = $fileId";
    if ($conn->query($sql) === TRUE) {
        // Excluir o arquivo da pasta de uploads
        $filePath = 'uploads/' . $fileToDelete;
        if (file_exists($filePath)) {
            unlink($filePath); // Exclui o arquivo
            echo "Arquivo excluído com sucesso.";
        } else {
            echo "Arquivo não encontrado na pasta de uploads.";
        }
    } else {
        echo "Erro ao excluir o arquivo do banco de dados: " . $conn->error;
    }
} else {
    echo "Erro ao receber o ID do arquivo.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
