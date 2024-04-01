<?php
use Dotenv\Dotenv;
use Slim\Factory\AppFactory;
//use Slim\Views\Twig;
//use Slim\Views\TwigMiddleware;

require "../vendor/autoload.php";
require "./bootstrap.php";

$app = AppFactory::create();
//$twig = Twig::create('../app/views', ['cache' => false]);
$routes= require '../app/routes/routes.php';

$routes($app);
$app->run();
?>