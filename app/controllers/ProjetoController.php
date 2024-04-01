<?php

namespace app\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class inscricaoController{
    public function projeto(Request $request, Response $response){
        view('projetos');
        return $response;
    }
}
?>