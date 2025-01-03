<?php

use Core\Session;
use Core\ValidationException;

const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . 'vendor/autoload.php';
require BASE_PATH . 'Core/functions.php';

session_start();

$_SESSION['name'] = 'Carl';
$_SESSION['age'] = 23;

# custom autoloader
// spl_autoload_register(function($class) {
//     // convert $class from Core\Database to Core/Database
//     $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
//     require base_path("$class.php");
// });

$router = new Core\Router();

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {
    Session::flash('errors', $exception->errors());
    Session::flash('old', $exception->old());
    
    return redirect($router->previousUrl());
}


Session::unflash(); // remove flash messages