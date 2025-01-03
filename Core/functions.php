<?php

use Core\Response;
use Core\Session;

function dd($value) {
    echo'<pre>';
    var_dump($value);
    echo'</pre>';
    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = Response::NOT_FOUND, $message = 'Not Found') {
    http_response_code($code);
    echo "$message.<br/>";
    echo '<a href="/">Go to Home</a>';
    die();
}

function authorize($condition, $status = Response::FORBIDDEN) {
    if (!$condition) {
        abort($status, 'Forbidden');
    }
}

function base_path($path) {
    return BASE_PATH . $path;
}

function view($path, $attributes) {
    extract($attributes);
    require base_path('views/' . $path);
}

function redirect($path) {
    header("location: {$path}");
    exit();
}

function old($key, $default = '') {
    return Session::get('old')[$key] ?? $default;
}