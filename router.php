<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/PRACTICE/' => 'controllers/index.php',
    '/PRACTICE/about' => 'controllers/about.php',
    '/PRACTICE/contact' => 'controllers/contact.php',
    '/PRACTICE/blogs' => 'controllers/blogs.php',
    '/PRACTICE/blog' => 'controllers/blog.php',
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routeToController($uri, $routes);
