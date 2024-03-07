<?php

$heading = 'Creat new note';
$title = 'Creat new note';

$config = require('config.php');

$db = new Database($config['database']);

$body = trim($_POST['body']);

$error = '';

if (strlen($body) === 0) {
    $error = 'A body is required';
} elseif (strlen($body) > 300) {
    $error = 'Body cannnot have more than 300 characters';
} elseif (strlen($body) < 5) {
    $error = 'Body must have more than 5 characters';
} 

if ($error !== '') {
    require('view/notes/create.view.php');
    die();
}

$db->query('insert into notes(body, user_id) values (:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => $_SESSION['user']['user_id']
]);

header('Location: /notes');