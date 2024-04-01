<?php

namespace app\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class EstandesController{

    public function estandes(Request $request, Response $response){
        view('estandes');
        return $response;
    }
}