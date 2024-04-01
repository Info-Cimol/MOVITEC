<?php

namespace app\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class RegrasController{
    public function regras(Request $request, Response $response){
        view('regras');
        return $response;
    }
}