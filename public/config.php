<?php
$hostname = "mysql.infocimol.com.br";
$username = "infocimol18";
$password = "ketleinmm1";
$database = "infocimol18";

define("URL", "https://mostracientifica.infocimol.com.br");

$conexao = new mysqli($hostname, $username, $password, $database);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
?>
