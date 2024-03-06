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
        'uri' => '/',
        'method' => 'GET',
        'controller' => 'controllers/index.php'
    ],

    [
        'uri' => '/home',
        'method' => 'GET',
        'controller' => 'controllers/home.php'
    ],

    [
        'uri' => '/contact',
        'method' => 'GET',
        'controller' => 'controllers/contact.php'
    ],

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

    [
        'uri' => '/note/edit',
        'method' => "GET",
        'controller' => 'controllers/notes/edit.php'
    ],

    [
        'uri' => '/note',
        'method' => "PATCH",
        'controller' => 'controllers/notes/update.php'
    ],

    [
        'uri' => '/register',
        'method' => "GET",
        'controller' => 'controllers/registration/create.php'
    ],

    [
        'uri' => '/register',
        'method' => "POST",
        'controller' => 'controllers/registration/store.php'
    ],

];