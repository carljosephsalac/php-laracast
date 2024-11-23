<?php

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