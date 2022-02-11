<?php

use Iguid\Config\Config;
use Symfony\Component\Dotenv\Dotenv;
require __DIR__ . '/../vendor/autoload.php';

use App\Http\Controllers\TestController;

$_ENV['APP_ROOT'] = dirname(getcwd());



$dotenv = new Dotenv();



/**
 * --------------------------------------------------------------
 *  Env settings are very special in application development
 *  You have your own settings that no one can change
 *  
 *  It is not necessary to use env in publication mode
 *  use alternative config files
 * 
 * ------------------------------------------------------
 */
if (file_exists(dirname(__DIR__) . '/.env')) {
    $dotenv->load(dirname(__DIR__) . '/.env');
}

/**
 * -------------------------------------------
 * Bootstrap your app
 * 
 * -------------------------------------------
 */
$app = require_once __DIR__ . '/../bootstrap/app.php';


/**
 * --------------------------------------------------------------
 * Router
 * --------------------------------------------------------------
 * 
 */
require __DIR__ . '/../routes/web.php';

