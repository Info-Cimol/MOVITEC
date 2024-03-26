<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $status = $_POST["status"];
    
    
    echo "<div>Título: " . $titulo . "</div>";
    echo "<div>Descrição: " . $descricao . "</div>";
    echo "<div>Status: " . $status . "</div>";
    
    $sql = "INSERT INTO tarefa (titulo, descricao, status) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    
    if (!$stmt) {
        echo "<div>Erro na preparação da consulta: " . $conexao->error . "</div>";
        exit();
    }
    
    $stmt->bind_param("sss", $titulo, $descricao, $status);
    
    if (!$stmt->execute()) {
        echo "<div>Erro na execução da consulta: " . $stmt->error . "</div>";
        exit();
    }
    
    $stmt->close();
    
    header("Location:/?sucesso=inserido");
    exit();
} else {
    header("Location: cadastro_tarefa.php");
    exit();
}
?>
