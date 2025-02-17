<?php

$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Notes';

$notes = $db->query('select * from notes')->get();

// dd($notes);

require 'views/notes.view.php';
// require 'views/note.view.php';
