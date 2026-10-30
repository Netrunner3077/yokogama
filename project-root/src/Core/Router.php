<?php
// src/Core/Router.php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function add(string $path, string $action): void
    {
        $this->routes[$path] = $action;
    }

    public function dispatch(string $uri): void
    {
        // Убираем query string (все что после ?) и лишние слеши
        $uri = parse_url($uri, PHP_URL_PATH);
        $uri = '/' . trim($uri, '/');

        if (array_key_exists($uri, $this->routes)) {
            $action = $this->routes[$uri];
            [$controllerName, $methodName] = explode('@', $action);

            $controllerClass = "App\\Controllers\\" . $controllerName;

            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                if (method_exists($controller, $methodName)) {
                    $controller->$methodName();
                    return;
                }
            }
        }

        // 404 Страница не найдена
        http_response_code(404);
        echo "<h1>404 - Страница не найдена</h1>";
    }
}
