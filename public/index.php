<?php
require '../vendor/autoload.php';

use App\Core\Router;

$routes = require '../Config/controller.php';

$router = new Router($routes);
$router->run();
