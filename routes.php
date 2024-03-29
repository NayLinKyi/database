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
        'controller' => 'controllers/index.php',
        'middleware' => null
    ],

    [
        'uri' => '/home',
        'method' => 'GET',
        'controller' => 'controllers/home.php',
        'middleware' => null
    ],

    [
        'uri' => '/contact',
        'method' => 'GET',
        'controller' => 'controllers/contact.php',
        'middleware' => null
    ],

    [
        'uri' => '/about',
        'method' => 'GET',
        'controller' => 'controllers/about.php',
        'middleware' => null
    ],
    
    [
        'uri' => '/notes',
        'method' => 'GET',
        'controller' => 'controllers/notes/index.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/note',
        'method' => 'GET',
        'controller' => 'controllers/notes/show.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/notes/create',
        'method' => 'GET',
        'controller' => 'controllers/notes/create.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/notes',
        'method' => 'POST',
        'controller' => 'controllers/notes/store.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/note',
        'method' => "delete",
        'controller' => 'controllers/notes/destroy.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/note/edit',
        'method' => "GET",
        'controller' => 'controllers/notes/edit.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/note',
        'method' => "PATCH",
        'controller' => 'controllers/notes/update.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/register',
        'method' => "GET",
        'controller' => 'controllers/registration/create.php',
        'middleware' => 'guest'
    ],

    [
        'uri' => '/register',
        'method' => "POST",
        'controller' => 'controllers/registration/store.php',
        'middleware' => 'guest'
    ],

    [
        'uri' => '/login',
        'method' => "GET",
        'controller' => 'controllers/login/create.php',
        'middleware' => 'guest'
    ],

    [
        'uri' => '/logout',
        'method' => "POST",
        'controller' => 'controllers/session/destroy.php',
        'middleware' => 'auth'
    ],



];