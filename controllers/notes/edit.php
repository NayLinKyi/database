<?php

$heading = 'Edit Note';
$title = 'Edit note';

$config = require('config.php');

$db = new Database($config['database']);

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === 1);

require('view/notes/edit.view.php');
