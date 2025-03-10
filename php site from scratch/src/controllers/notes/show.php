<?php


$config = require('src/config.php');

$db = new Database($config['database']);

$heading = 'Note';
$currentUserId = 1;

$note = $db->query(
    'select * from notes where id = :id',
    [

        'id' => $_GET['id']
    ]
)->findOrFail();

authorize($note['user_id'] === $currentUserId);


if ($note[0]['user_id'] != $currentUserId) {
    abort(Response::FORBIDDEN);
}

// dd($note[0]['body']);


require 'views/notes/show.view.php';
