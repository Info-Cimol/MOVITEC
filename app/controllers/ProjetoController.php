<?php

namespace app\controllers;

use app\models\ProjetoModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ProjetoController{
    //private $projetoModel;

    /*public function __construct(ProjetoModel $projetoModel) {
        $this->projetoModel = $projetoModel;
    }*/
    public function index() {
        $projetos = ProjetoModel::all(); 
        print($projetos);
        include_once(__DIR__ . '/../views/projetos.php');
    }
    
    
    public function inscricao(Request $request, Response $response){
        view('inscricao');
        return $response;
    }
    public function estandes(Request $request, Response $response){
        $projetoModel = new ProjetoModel();
        $projetos = $projetoModel->obterTodosProjetos();

        return view('estandes', ['projetos' => $projetos]);
    }
    public function processarFormulario($request,  $response) {
        $data = $request->getParsedBody();
        $uploadedFile = $request->getUploadedFiles()['projeto_pdf'];

        $titulo = $data["titulo"];
        $tema = $data["tema"];
        $problema = $data["problema"];
        $justificativa = $data["justificativa"];
        $objetivos = $data["objetivos"];
        $hipoteses = $data["hipoteses"];
        $resumo = $data["resumo"];
        $arquivo_pdf = $uploadedFile->getClientFilename();

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($arquivo_pdf);
        $uploadOk = 1;
        $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($pdfFileType != "pdf") {
            echo "Apenas arquivos PDF são permitidos.";
            $uploadOk = 0;
        }

        if ($uploadOk != 0 && $uploadedFile->getError() === UPLOAD_ERR_OK && move_uploaded_file($uploadedFile->getStream()->getMetadata('uri'), $target_file)) {
            $this->projetoModel = new ProjetoModel();
            if ($this->projetoModel->inserirProjeto($titulo, $tema, $problema, $justificativa, $objetivos, $hipoteses, $resumo, $arquivo_pdf)) {
                view('home');
                return $response;
            } else {
                echo "Erro ao inserir os dados no banco de dados.";
            }
        } else {
            echo "Ocorreu um erro ao fazer o upload do arquivo.";
        }

        return $response->withHeader("Location", "/?sucesso=inserido");
    }
    public function detalhesProjeto(Request $request, Response $response, array $args) {
        if (isset($args['id'])) {
            $id_projeto = $args['id'];
            $projetoModel = new ProjetoModel();
            $projeto = $projetoModel->obterProjetoPorId($id_projeto);
    
            if ($projeto) {
               
                return view('projetos', ['projeto' => $projeto]);
            } else {
                echo "Projeto não encontrado.";
            }
        } else {

            echo "ID do projeto não especificado.";
        }
    }
    

}
?>