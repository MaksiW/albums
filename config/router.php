<?php 

$routes = [
    '/' => 'CardsController',
];

function getRequestPath() {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return '/' . ltrim(str_replace('index.php', '', $path), '/');
}

function getController(array $routes, $path) {
	if (isset($routes[$path])) {
            return $routes[$path];
        }
    return 'CardsController';
}

$class = getController($routes,getRequestPath());
new $class();
