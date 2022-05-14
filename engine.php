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
            return Viewer::view('dvents/index.php', $context);
        }
    ),

    new Route(
        '/services',
        function ($context) {
            return Viewer::view('dvents/services/index.php', $context);
        }
    ),

    new Route(
        '/events',
        function ($context) {
            return Viewer::view('dvents/events/index.html', $context);
        }
    ),

    new Route(
        '/aboutus',
        function ($context) {
            return Viewer::view('dvents/about/index.html', $context);
        }
    ),

    new Route(
        '/contact',
        function ($context) {
            return Viewer::view('dvents/contact/index.html', $context);
        }
    ),
]);
$router->launch();
