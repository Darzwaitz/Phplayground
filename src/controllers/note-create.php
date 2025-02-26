<?php

$config = require('src/config.php');

$db = new Database($config['database']);

$heading = 'Create note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // dd($_POST);
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 1,
    ]);
};

require 'src/views/note-create.view.php';
