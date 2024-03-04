<?php



$heading = 'Create New Note';
$title = 'Create new note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require('Database.php');

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
    } else {
        $db->query('insert into notes(body, user_id) values (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require('view/note-create.view.php');
