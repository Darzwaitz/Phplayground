<?php

$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Notes';

$notes = $db->query('select * from notes')->find();

// dd($notes);

require 'views/notes.view.php';
