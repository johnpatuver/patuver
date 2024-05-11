<?php
$usuario = 'root';
$senha = '1554';
$database = 'login';
$host = 'localhost';

// Configurações para eu conectar com o banco de dados MySQL HEHEHEH 
$conn = new mysqli($host, $usuario, $senha, $database);

// nessa linha o codigo faz uma Verificar conexão HEHEHE 
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Aqui nessa linha vai fazer a verificação se um arquivo foi enviado truta 
if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK && isset($_FILES["fileToUpload"])) {
    $filename = basename($_FILES["fileToUpload"]["name"]);
    $description = $_POST['fileDescription']; // Aqui nesse codigo me traz a descrição do arquivo HEHEH 

    // Nessa opção o codigo vai mover o arquivo para a pasta de upload que fica bem dentro da pasta principal achei lá mais facíl 
    $target_dir = "uploads/";
    $target_file = $target_dir . $filename;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //   Aqui nessa opçaõ o codigo vai colcoar o nome do arquivo e a descrição no banco de dados trutina HEHEHE
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

// Aqui eu Fecho a conexão com o banco de dados
$conn->close();
?>
