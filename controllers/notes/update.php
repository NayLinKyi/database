<?php

$config = require('config.php');

$db = new Database($config['database']);

$body = trim($_POST['body']);

$error = '';

if (strlen($body) === 0) {
    $error = 'A body is required';
} elseif (strlen($body) > 30) {
    $error = 'Body cannnot have more than 300 characters';
} elseif (strlen($body) < 5) {
    $error = 'Body must have more than 5 characters';
}

if ($error !== '') {
    $heading = 'Edit  note';
    $title = 'Edit note';
    $note = $db->query('select * from notes where id = :id', ['id' => $_POST['id']])->findOrFail();
    require('view/notes/edit.view.php');
    die();
}

$db->query('update notes set body = :body where id = :id', [
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);

header('location: /notes');
