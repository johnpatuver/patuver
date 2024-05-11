<?php
// Configurações para eu conectar com o banco de dados
$usuario = 'root';
$senha = '1554';
$database = 'login';
$host = 'localhost';

// Conexão feita com o banco de dados HEHEH 
$conn = new mysqli($host, $usuario, $senha, $database);

// o codigo procura algum  erro na conexão HEHEH E
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Query vai fazer a seleção todos os usuários HEHEH 
$sql = "SELECT * FROM usuarios";

// Executa a query
$result = $conn->query($sql);

// Array para guardar os usuários HEHEH
$usuarios = array();

// aqui vai procura se teve resultados
if ($result->num_rows > 0) {
    // um Loop através dos resultados e adiciona os usuários ao array  HEHEH 
    while ($row = $result->fetch_assoc()) {
        $usuario = array(
            'nome' => $row['nome'],
            'email' => $row['email']
        );
        array_push($usuarios, $usuario);
    }
}

// Nesa linha aqui jovem vai echa a conexão com o banco de dados HEHEH 
$conn->close();

// traz todos os usuários em formato JSON
header('Content-Type: application/json');
echo json_encode($usuarios);
?>
