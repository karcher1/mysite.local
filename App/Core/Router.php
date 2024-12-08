<?php

namespace App\Core;

class Router
{
    private const CONTROLLER_NAMESPACE_USER = "App\Controllers\User\\";
    private const CONTROLLER_NAMESPACE_ADMIN = "App\Controllers\Admin\\";
    private array $routes = [];
    private array $requestUri = [];

    public function __construct(array $routes)
    {
        $this->routes = $routes;
        $this->processRequest();
    }

    public function run(): void
    {
        $routeKey = implode("/", $this->requestUri);
        $isAdmin = strpos($routeKey, 'admin') === 0;

        if (!isset($this->routes[$routeKey])) {
            $this->handleError($isAdmin ? 'Admin' : 'User');
            return;
        }

        $controllerAction = $this->routes[$routeKey];
        [$namespace, $method] = $this->resolveNamespaceAndMethod($controllerAction);

        if (!class_exists($namespace) || !method_exists($namespace, $method)) {
            $this->handleError($isAdmin ? 'Admin' : 'User');
            return;
        }

        $controller = new $namespace();
        $controller->$method();
    }


    private function resolveNamespaceAndMethod(string $controllerAction): array
    {
        $parts = explode("/", $controllerAction);
        $zone = $parts[0];
        $controllerName = $parts[1];
        $method = $parts[2] ?? 'index';

        $namespace = $zone === 'Admin'
            ? self::CONTROLLER_NAMESPACE_ADMIN . $controllerName
            : self::CONTROLLER_NAMESPACE_USER . $controllerName;

        return [$namespace, $method];
    }

    private function processRequest(): void
    {
        $this->requestUri = isset($_SERVER["REQUEST_URI"])
            ? explode("/", trim($_SERVER["REQUEST_URI"], "/"))
            : [];
    }

    private function handleError(string $zone): void
    {
        $errorRoute = $zone === 'Admin' ? 'admin/error' : 'error';

        if (isset($this->routes[$errorRoute])) {
            [$namespace, $method] = $this->resolveNamespaceAndMethod($this->routes[$errorRoute]);
            $controller = new $namespace();
            $controller->$method();
        } else {
            echo "<h1>404 Not Found</h1>";
        }
    }
}
