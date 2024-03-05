<?php


$config = require('config.php');

$db = new Database($config['database']);

$note = $db->query('select * from notes where id = :id', ['id' => $_POST['id']])->findOrFail();
authorize($note['user_id'] === 1, 403);


$db->query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
