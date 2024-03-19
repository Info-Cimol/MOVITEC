<?php

use Slim\Factory\AppFactory;

require "../vendor/autoload.php";
require "./bootstrap.php";

$app = AppFactory::create();

$routes= require '../app/routes/routes.php';

$routes($app);
$app->run();