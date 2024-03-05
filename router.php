<?php

class Router {

    public static function route($uri, $method, $routes) {
        foreach($routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                require($route['controller']);
                return;
            }
        }

        abort();
    }
}