<?php

require('functions.php');
require('Database.php');


$config = require('config.php');


$db = new Database($config['database']);
$posts = $db->query("select * from posts where id = :id and title = :title", [
    'title' => 'Third post',
    'id' => 3
])->fetchAll();

