<?php

use Slim\App;

use app\controllers\HomeController;
use app\controllers\UserController;

return function(App $app){

    $app->get('/', [HomeController::class, 'index']);

    $app->get('/regulamentos', [HomeController::class, 'regras']);
    $app->get('/projeto', [HomeController::class, 'projeto']);
    $app->get('/inscricao', [HomeController::class, 'inscricao']);
    $app->get('/tarefa', [HomeController::class, 'cadastro_tarefa']);
    $app->get('/tutoriais', [HomeController::class, 'tutoriais']);
    $app->get('/estandes', [HomeController::class, 'estandes']);
};