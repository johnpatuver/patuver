<?php
$usuario = 'root';
$senha = '1554';
$database = 'login';
$host = 'localhost';

// codigo padrão para se conectar ao banco de dados MySQL ( O pai e fera ! )
$conn = new mysqli($host, $usuario, $senha, $database);

// Verificar conexão para dar certo nessa bagaça HEHEHE 
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Selecionar todos os arquivos do banco de dados ( Mandei foi selecionar tudo Velhor :) )
$sql = "SELECT id, filename, description FROM uploads";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $filename = $row["filename"];
        $description = $row["description"];
        echo '<li data-id="' . $id . '">' . $filename . ' - ' . $description . ' <a href="download.php?file=' . urlencode($filename) . '">Baixar</a> | <a href="#" class="deleteFile" data-id="' . $id . '" data-file="' . $filename . '">Excluir</a></li>';
    }
} else {
    echo "Nenhum arquivo encontrado.";
}

// Fechar a conexão com o banco de dados para finalizar e ficar top HEHEH 
$conn->close();
?>
