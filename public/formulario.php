<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $tema = $_POST["tema"];
    $problema = $_POST["problema"];
    $justificativa = $_POST["justificativa"];
    $objetivos = $_POST["objetivos"];
    $hipoteses = $_POST["hipoteses"];
    $resumo = $_POST["resumo"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["projeto_pdf"]["name"]);
    $uploadOk = 1;
    $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if($pdfFileType != "pdf") {
        echo "Apenas arquivos PDF são permitidos.";
        $uploadOk = 0;
    }

    if ($uploadOk != 0 && move_uploaded_file($_FILES["projeto_pdf"]["tmp_name"], $target_file)) {
       
        $arquivo_pdf = $target_file;
        $sql = "INSERT INTO projetos (titulo, tema, problema, justificativa, objetivos, hipoteses,resumo, arquivo_pdf) 
                VALUES ('$titulo','$tema', '$problema', '$justificativa', '$objetivos', '$hipoteses','$resumo', '$arquivo_pdf')";
        
        if ($conexao->query($sql) === TRUE) {
            echo "Os dados foram inseridos no banco de dados com sucesso.";
        } else {
            echo "Erro ao inserir os dados no banco de dados: " . $conexao->error;
        }
    } else {
        echo "Ocorreu um erro ao fazer o upload do arquivo.";
    }

    header("Location:/?sucess=inserido");
    $conexao->close();
} else {
    header("Location: projetos.php");
    exit();
}
?>
