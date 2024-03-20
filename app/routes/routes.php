<?php

use Slim\App;

use app\controllers\HomeController;
use app\controllers\UserController;

return function(App $app){

    $app->get('/', [HomeController::class, 'index']);
    $app->get('/regras', [HomeController::class, 'regras']);
    $app->get('/projeto', [HomeController::class, 'projeto']);
    $app->get('/inscricao', [HomeController::class, 'inscricao']);
    
};