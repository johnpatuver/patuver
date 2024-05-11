<?php
// Configurações de conexão com o banco de dados
$usuario = 'root';
$senha = '1554';
$database = 'login';
$host = 'localhost';

// Conexão com o banco de dados
$conn = new mysqli($host, $usuario, $senha, $database);

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Query para inserir os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    // Executa a query
    if ($conn->query($sql) === TRUE) {
        // Retorna um código de status 200 (OK) para indicar sucesso
        http_response_code(200);
    } else {
        // Retorna um código de status 500 (Erro do servidor) se houver um erro na inserção
        http_response_code(500);
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
