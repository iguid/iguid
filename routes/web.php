<?php

use App\Http\Controllers\TestController;
use Iguid\Router\Router;


$router = new Router();

$router->get('/test', [TestController::class, 'app']);
$router->get('/test/{id}', [TestController::class, 'test']);
$router->get('/test/{id}/edit', function () {
    // dd($id);
    // echo 'Good';
    return [
        'app' => 'not app',
        'hi' => 'hi there'
    ];
});


// $router->run();