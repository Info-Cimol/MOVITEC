<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$hostname = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

$conexao = new mysqli($hostname, $username, $password, $database);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

$sql = "SELECT id, titulo, tema FROM projetos";
$resultado = $conexao->query($sql);
if ($resultado === false) {
    die("Erro ao executar a consulta: " . $conexao->error);
}

?>
