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

// Verificar se um arquivo foi enviado
if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK && isset($_FILES["fileToUpload"])) {
    $filename = basename($_FILES["fileToUpload"]["name"]);
    $description = $_POST['fileDescription']; // Obter a descrição do arquivo

    // Mover o arquivo para a pasta de upload
    $target_dir = "uploads/";
    $target_file = $target_dir . $filename;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Inserir o nome do arquivo e a descrição no banco de dados
        $sql = "INSERT INTO uploads (filename, description) VALUES ('$filename', '$description')";
        if ($conn->query($sql) === TRUE) {
            echo $filename;
        } else {
            echo "Erro ao realizar upload do arquivo: " . $conn->error;
        }
    } else {
        echo "Erro ao realizar upload do arquivo.";
    }
} else {
    echo "Erro ao enviar o arquivo.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
