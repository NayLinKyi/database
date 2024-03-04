<?php

$config = require('config.php');

$db = new Database($config['database']);

$notes = $db->query('select * from notes where user_id = 1')->get();

$heading = 'My Notes';
$title = "My Notes";

require('view/notes/index.view.php');

