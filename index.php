<?php

spl_autoload_register(function ($class) {
    require("$class.php");
});


require('functions.php');
require('router.php');

// $config = require('config.php');

// $db = new Database($config['database']);
// $post = $db->query('select * from posts where id = 2')->fetchAll();

