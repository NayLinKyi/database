<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/signup' => 'controllers/signup.php',
    '/posts' => 'controllers/posts.php',
    '/home' => 'controllers/home.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/notes/create' => 'controllers/note-create.php',
    
];

function routeToContoller($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require($routes[$uri]);
    } else {
        abort();
    }
}


routeToContoller($uri, $routes);