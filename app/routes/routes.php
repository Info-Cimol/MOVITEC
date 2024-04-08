<?php

use Slim\App;

use app\controllers\HomeController;
use app\controllers\ProjetoController;
use app\controllers\TarefaController;
use app\models\Projeto;
use app\models\ProjetoModel;

return function(App $app){

    $app->get('/', [HomeController::class, 'index']);

    $app->get('/regulamentos', [HomeController::class, 'regras']);

    $app->get('/inscricao', [ProjetoController::class, 'inscricao']);
    $app->get('/projeto/{id}', [ProjetoController::class, 'detalhesProjeto']);
    $app->get('/projetoo/{id}', [ProjetoController::class, 'obterProjetos']);

    $app->post('/projetoo', [ProjetoController::class, 'processarFormulario']);
   
    $app->get('/tarefa', [TarefaController::class, 'cadastro_tarefa']);
    $app->get('/tutoriais', [HomeController::class, 'tutoriais']);
    
    $app->get('/estandes', [ProjetoController::class, 'estandes']);
};