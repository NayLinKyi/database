<?php

// return [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/contact' => 'controllers/contact.php',
//     '/signup' => 'controllers/signup.php',
//     '/posts' => 'controllers/posts.php',
//     '/home' => 'controllers/home.php',
//     '/notes' => 'controllers/notes/index.php',
//     '/note' => 'controllers/notes/show.php',
//     '/notes/create' => 'controllers/notes/create.php'
// ];

return [
    [
        'uri' => '/about',
        'method' => 'GET',
        'controller' => 'controllers/about.php'
    ],
    
    [
        'uri' => '/notes',
        'method' => 'GET',
        'controller' => 'controllers/notes/index.php'
    ],

    [
        'uri' => '/note',
        'method' => 'GET',
        'controller' => 'controllers/notes/show.php'
    ],

    [
        'uri' => '/notes/create',
        'method' => 'GET',
        'controller' => 'controllers/notes/create.php'
    ],

    [
        'uri' => '/notes',
        'method' => 'POST',
        'controller' => 'controllers/notes/store.php'
    ],

    [
        'uri' => '/note',
        'method' => "delete",
        'controller' => 'controllers/notes/destroy.php'
    ],

];