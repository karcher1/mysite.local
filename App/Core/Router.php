<?php

namespace App\Core;

class Router
{
    private const CONTROLLER_NAMESPACE = "App\Controllers\\";
    private array $routes = [];
    private array $requestUri = [];

    public function __construct(array $routes)
    {
        $this->routes = $routes;
        $this->processRequest();
    }

    public function run(): void
    {
        if (!$this->validate()) {
            $namespace = self::CONTROLLER_NAMESPACE . "Error";
            $methodName = "index";
        } else {
            $route = implode("/", $this->requestUri);
            $controllerAction = $this->routes[$route] ?? $this->routes['error'] ?? "Error/index";
            [$controllerName, $methodName] = explode("/", $controllerAction);

            $namespace = self::CONTROLLER_NAMESPACE . $controllerName;
        }

        if (!class_exists($namespace)) {
            $namespace = self::CONTROLLER_NAMESPACE . "Error";
            $methodName = "index";
        }

        $controller = new $namespace();

        if (!method_exists($controller, $methodName)) {
            $methodName = "index";
        }

        $controller->$methodName();
    }

    private function processRequest(): void
    {
        $this->requestUri = isset($_SERVER["REQUEST_URI"]) ? explode("/", trim($_SERVER["REQUEST_URI"], "/")) : [];
    }

    private function validate(): bool
    {
        $route = implode("/", $this->requestUri);
        return array_key_exists($route, $this->routes);
    }
}