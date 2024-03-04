<?php


$config = require('config.php');

$db = new Database($config['database']);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $db->query('select * from notes where id = :id', ['id' => $_POST['id']])->findOrFail();
    authorize($note['user_id'] === 1, 403);


    $db->query('delete from notes where id = :id', [
        'id' => $_POST['id']
    ]);

    header('location: /notes');

} else {

    $note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

    authorize($note['user_id'] === 1, 403);

    $heading = 'Note';
    $title = "Note";

    require('view/notes/show.view.php');
}
