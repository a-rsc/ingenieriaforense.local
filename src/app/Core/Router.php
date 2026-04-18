<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $path, array $action): void
    {
        $this->routes['GET'][$path] = $action;
    }

    public function post(string $path, array $action): void
    {
        $this->routes['POST'][$path] = $action;
    }

    public function dispatch(string $uri, string $method): void
    {
        $action = $this->routes[$method][$uri] ?? null;

        if (!$action) {
            http_response_code(404);

            $action404 = $this->routes['GET']['/404'] ?? null;

            if ($action404) {
                [$controller, $function] = $action404;
                $instance = new $controller();
                $instance->$function();
                return;
            }

            echo '404 - Página no encontrada';
            return;
        }

        [$controller, $function] = $action;
        $instance = new $controller();
        $instance->$function();
    }
}