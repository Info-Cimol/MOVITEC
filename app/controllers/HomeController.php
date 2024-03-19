<?php

namespace app\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController{
    public function index(Request $request, Response $response){
        view('home');
        return $response;
    }
    public function regras(Request $request, Response $response){
        view('regras');
        return $response;
    }
    public function projeto(Request $request, Response $response){
        view('projetos');
        return $response;
    }
}
