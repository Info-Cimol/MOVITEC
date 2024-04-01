<?php

namespace app\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class TutoriaisController{
    public function tutoriais(Request $request, Response $response){
        view('tutoriais');
        return $response;
    }
}