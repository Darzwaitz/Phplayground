<?php

$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Notes';

$notes = $db->query('select * from notes')->fetch();

// dd($notes);

require 'views/notes.view.php';
