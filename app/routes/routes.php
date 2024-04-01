<?php

use Slim\App;

use app\controllers\HomeController;
use app\controllers\InscricaoController;
use app\controllers\ProjetoController;
use app\controllers\TarefaController;
use app\controllers\EstandesController;
use app\controllers\RegrasController;
use app\controllers\TutoriaisController;

return function(App $app){

    $app->get('/', [HomeController::class, 'index']);

    $app->get('/regulamentos', [RegrasController::class, 'regras']);
    $app->get('/projeto', [ProjetoController::class, 'projeto']);
    $app->get('/inscricao', [InscricaoController::class, 'inscricao']);
    $app->get('/tarefa', [TarefaController::class, 'cadastro_tarefa']);
    $app->get('/tutoriais', [TutoriaisController::class, 'tutoriais']);
    $app->get('/estandes', [EstandesController::class, 'estandes']);
};