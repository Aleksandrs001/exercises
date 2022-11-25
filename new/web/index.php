<?php


require_once "vendor/autoload.php";
require_once 'view/index.php';


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route) {
    $route->addRoute('GET', '/', ['App\Controller\WeatherReportController', $_GET["cityName"]?? "Riga"]);
 //$route->addRoute('POST', '/', ['App\Controller\ApiController', "HI"]);

});

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
        echo "... 404 Not Found";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        echo "... 405 Method Not Allowed";
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        // ... call $handler with $vars
        [$controller, $method] = $handler;
        $cc= new $controller($method); //NEW WeatherReportController
        $_SESSION['glob'] = $glob=$cc->getNew();
        break;

}


