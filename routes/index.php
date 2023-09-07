<?php

require dirname(__DIR__).'/config/app.php';
use App\Http\Controllers\Api\AppController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your application. 
|
*/


$app->router->get('/api', [AppController::class, 'index']);

$app->run();