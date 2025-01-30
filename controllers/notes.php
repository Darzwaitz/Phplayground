<?php

$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Notes';

// dd($db);

require 'views/notes.view.php';
