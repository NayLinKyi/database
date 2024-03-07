<?php

$config = require('config.php');

$db = new Database($config['database']);

$notes = $db->query('select * from notes where user_id = :user_id', [
    'user_id' => $_SESSION['user']['user_id']
])->get();

$heading = 'My Notes';
$title = "My Notes";

require('view/notes/index.view.php');

