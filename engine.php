<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('dvents/index.php', $context);
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
            return Viewer::view('dvents/events/index.php', $context);
        }
    ),

    new Route(
        '/aboutus',
        function ($context) {
            return Viewer::view('dvents/about/index.php', $context);
        }
    ),

    new Route(
        '/contact',
        function ($context) {
            return Viewer::view('dvents/contact/index.php', $context);
        }
    ),

    new Route(
        '/eventdashboard',
        function ($context) {
            return Viewer::view('dvents/main/index.php', $context);
        }
    ),
]);
$router->launch();
