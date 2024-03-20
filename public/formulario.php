<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tema = $_POST["tema"];
    $problema = $_POST["problema"];
    $justificativa = $_POST["justificativa"];
    $objetivos = $_POST["objetivos"];
    $hipoteses = $_POST["hipoteses"];
    
   $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["projeto_pdf"]["name"]);
    $uploadOk = 1;
    $pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if($pdfFileType != "pdf") {
        echo "Apenas arquivos PDF são permitidos.";
        $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
        echo "O arquivo não foi enviado.";
    } else {
        if (move_uploaded_file($_FILES["projeto_pdf"]["tmp_name"], $target_file)) {
            echo "O arquivo ". htmlspecialchars( basename( $_FILES["projeto_pdf"]["name"])). " foi enviado com sucesso.";
        } else {
            echo "Ocorreu um erro ao enviar o arquivo.";
        }
    }
    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Tema:</strong>$tema</p>";
    echo "<p><strong>Problema:</strong>$problema</p>";
    echo "<p><strong>Justificativa:</strong>$justificativa</p>";
    echo "<p><strong>Objetivos:</strong>$objetivos</p>";
    echo "<p><strong>Hipóteses:</strong>$hipoteses</p>";
    echo "<p><strong>Arquivo PDF:</strong><a href='$target_file'>Baixar PDF</a></p>";
} else {
    header("Location: formulario.php");
    exit();
}
?>