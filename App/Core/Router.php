<?php

namespace App\Core;

class Router
{
    private const CONTROLLER_NAMESPACE = "App\Controllers\\";

    public function run(): void
    {
        $routeParts = $this->prepareControllersName();

        $controllerName = (is_array($routeParts) && !empty($routeParts[1]))
            ? ucfirst($routeParts[1])
            : "Main";
        $namespace = self::CONTROLLER_NAMESPACE . $controllerName;

        $methodName = (is_array($routeParts) && !empty($routeParts[2]))
            ? $routeParts[2]
            : "index";

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

    private function prepareControllersName(): array|string
    {
        $result = "Main";

        if (isset($_SERVER["REQUEST_URI"])) {
            $result = explode("/", $_SERVER["REQUEST_URI"]);
        }

        if (is_array($result) && empty($result[1])) {
            $result = "Main";
        }
        return $result;
    }
}