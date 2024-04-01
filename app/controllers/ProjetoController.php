<?php

namespace app\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class projetoController{
    public function projeto(Request $request, Response $response){
        view('projetos');
        return $response;
    }
    public function inscricao(Request $request, Response $response){
        view('inscricao');
        return $response;
    }
    public function estandes(Request $request, Response $response){
        view('estandes');
        return $response;
    }
}
?>