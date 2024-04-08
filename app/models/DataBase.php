<?php
namespace app\models;

class Database {
    protected $conexao;

    public function connect() {
        $hostname = $_ENV['DB_HOST'];
        $username = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASS'];
        $database = $_ENV['DB_NAME'];

        $conexao = new \mysqli($hostname, $username, $password, $database);

        if ($conexao->connect_error) {
            throw new \Exception("Erro de conexão: " . $conexao->connect_error);
        }

        return $conexao;
    }
}
?>
