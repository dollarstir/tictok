<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('dvents/index.html', $context);
        }
    ),

    new Route(
        '/home',
        function ($context) {
            return Viewer::view('dvents/index.html', $context);
        }
    ),
]);
$router->launch();
