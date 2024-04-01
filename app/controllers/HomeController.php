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
    public function tutoriais(Request $request, Response $response){
        view('tutoriais');
        return $response;
    }
}
