<?php

use Slim\App;

use app\controllers\HomeController;
use app\controllers\ProjetoController;
use app\controllers\TarefaController;

return function(App $app){

    $app->get('/', [HomeController::class, 'index']);

    $app->get('/regulamentos', [HomeController::class, 'regras']);
    $app->get('/projeto', [ProjetoController::class, 'projeto']);
    $app->get('/inscricao', [ProjetoController::class, 'inscricao']);
    $app->get('/tarefa', [TarefaController::class, 'cadastro_tarefa']);
    $app->get('/tutoriais', [HomeController::class, 'tutoriais']);
    $app->get('/estandes', [ProjetoController::class, 'estandes']);
};