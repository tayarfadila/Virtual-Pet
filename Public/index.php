<?php

use App\Controller\HomeController;
use App\Controller\PetController;
use App\Core\Application;

require __DIR__.'/../vendor/autoload.php';

$app = new Application(dirname(__DIR__));

$app->router->get('/', [HomeController::class, 'index']);

$app->router->get('/info', [PetController::class, 'info']);
$app->router->post('/feed', [PetController::class, 'feed']);
$app->router->post('/play', [PetController::class, 'play']);
$app->router->post('/bored', [PetController::class, 'bored']);
$app->router->post('/hunger',[PetController::class, 'hunger']);

$app->run();
