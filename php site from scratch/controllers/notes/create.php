<?php

require 'Validator.php';

$config = require 'config.php';


$db = new Database($config['database']);

$heading = 'Create note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // dd($_POST);
    $errors = [];

    // $validator = new Validator();

    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body is required';
    }

    if (strlen($_POST['body']) > 1000) {
        $errors['body'] = 'A body cannot be more than 1000 characterz';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1,
        ]);
    }
};

require 'views/notes/create.view.php';
