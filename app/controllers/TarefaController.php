<?php

namespace app\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class TarefaController{
    public function cadastro_tarefa(Request $request, Response $response){
        view('tarefa');
        return $response;
    }
}