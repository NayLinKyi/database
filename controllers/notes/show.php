<?php


$config = require('config.php');

$db = new Database($config['database']);

$note = $db->query('select * from notes where id = :id', [ 'id' => $_GET['id'] ])->findOrFail();

authorize($note['user_id'] === 1, 403);

$heading = 'Note';
$title = "Note";

require('view/notes/show.view.php');

