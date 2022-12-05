<?php

require_once 'vendor/autoload.php';

use App\Controllers\ArticlesController;
use App\Controllers\LoginController;
use App\Controllers\ProfileController;
use App\Controllers\RegistrationController;
use App\Services\LoginService;
use App\Template;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//$a= new \App\Services\IndexArticleService($dotenv);

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $route) {
    $route->addRoute("GET", "/", [ArticlesController::class, "index"]);
//    $route->addRoute("GET", "/articles", [ArticlesController::class, "index"]);
    $route->addRoute("GET", "/registration", [RegistrationController::class, "showForm"]);
    $route->addRoute("POST", "/registration", [RegistrationController::class, "store"]);
    $route->addRoute("GET", "/login", [LoginController::class,"loginWeb"]);
    $route->addRoute("POST", "/login", [LoginService::class,"getIn"]);
    $route->addRoute("GET", "/profile", [ProfileController::class,"userProfile"]);
});

$loader = new FilesystemLoader('views');
$twig = new Environment($loader);

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // ... call $handler with $vars
        [$controller, $method] = $handler;

        $response = (new $controller)->{$method}($vars);

        if ($response instanceof Template) {
            echo $twig->render($response->getPath(), $response->getParams());
            break;
        }
        if ($response instanceof LoginService) {

            echo $twig->render($response->getIn());
            var_dump($response);

            break;
        }
            if ($response instanceof ProfileController) {

             echo $twig->render($response->userProfile());
            break;
        }
}
