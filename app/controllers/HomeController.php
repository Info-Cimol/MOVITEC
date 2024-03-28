<?php

namespace app\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController{
    public function index(Request $request, Response $response){
        $section = isset($args['section']) ? $args['section'] : 'home';
        view('home', ['section' => $section]);
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
    public function inscricao(Request $request, Response $response){
        view('inscrição');
        return $response;
    }
    public function cadastro_tarefa(Request $request, Response $response){
        view('tarefa');
        return $response;
    }
    public function estandes(Request $request, Response $response){
        view('estandes');
        return $response;
    }
    public function tutoriais(Request $request, Response $response){
        view('tutoriais');
        return $response;
    }
}
