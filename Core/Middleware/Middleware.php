<?php

namespace Core\Middleware;

class Middleware
{
    // Mapping of middleware keys to their corresponding class names
    public const MAP = [
        'auth' => Auth::class,
        'guest' => Guest::class
    ];

    // Resolve the middleware by key and execute its handle method
    public static function resolve($key)
    {
        if (!$key) { // If no key is provided, return early
            return;
        }
        
        // Get the middleware class name from the MAP using the provided key
        $middleware = static::MAP[$key] ?? false;

        // If the middleware class name is not found in the MAP, throw an exception
        if (!$middleware) {
            throw new \Exception("Middleware with key '{$key}' not found.");
        }

        // Instantiate the middleware class and call its handle method
        (new $middleware)->handle();
    }
}