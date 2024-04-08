<?php
namespace app\models;
use app\models\DataBase;
class ProjetoModel{
    
    public $conexao;

    public function __construct() {
        $database = new Database();
        
        $this->conexao = $database->connect();
    }

    public function inserirProjeto($titulo, $tema, $problema, $justificativa, $objetivos, $hipoteses, $resumo, $arquivo_pdf) {
        $sql = "INSERT INTO projetos (titulo, tema, problema, justificativa, objetivos, hipoteses, resumo, arquivo_pdf) 
                VALUES ('$titulo', '$tema', '$problema', '$justificativa', '$objetivos', '$hipoteses', '$resumo', '$arquivo_pdf')";
        
        if ($this->conexao->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
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
    
            if ($pdfFileType != "pdf") {
                echo "Apenas arquivos PDF são permitidos.";
                $uploadOk = 0;
            }
    
            if ($uploadOk != 0 && move_uploaded_file($_FILES["projeto_pdf"]["tmp_name"], $target_file)) {
                $arquivo_pdf = $target_file;
                $inserido = $projetoModel->inserirProjeto($titulo, $tema, $problema, $justificativa, $objetivos, $hipoteses, $resumo, $arquivo_pdf);
    
                if ($inserido) {
                    echo "Os dados foram inseridos no banco de dados com sucesso.";
                } else {
                    echo "Erro ao inserir os dados no banco de dados.";
                }
            } else {
                echo "Ocorreu um erro ao fazer o upload do arquivo.";
            }
    
            header("Location:/?sucess=inserido");
        } else {
            header("Location: projetos.php");
            exit();
        }
    }
    public function obterProjetoPorId($id_projeto) {
        $sql = "SELECT * FROM projetos WHERE id = $id_projeto";
        $resultado = $this->conexao->query($sql);
        
        if ($resultado && $resultado->num_rows > 0) {
            return $resultado->fetch_assoc();
        } else {
            return null; 
        }
    }
    public function obterTodosProjetos() {
        $sql = "SELECT * FROM projetos";
    
    $resultado = $this->conexao->query($sql);
    
    if ($resultado && $resultado->num_rows > 0) {
        $projetos = [];
        while ($row = $resultado->fetch_assoc()) {
            $projetos[] = $row;
        }
        return $projetos;
    } else {
        return [];
    }
    }
    
    

}
?>
