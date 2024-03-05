<?php

spl_autoload_register(function ($class) {
    require("$class.php");
});

require('functions.php');
require('router.php');

$routes = require('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['method'] ?? $_SERVER['REQUEST_METHOD'];


Router::route($uri, $method, $routes);