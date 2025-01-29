<?php

require 'functions.php';

require 'router.php';

require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);

if ($_GET) {

    $id = $_GET['id'];
    $query = "SELECT * FROM `posts` where id = :id";

    // :: is scope resolution operator
    $posts = $db->query($query, [':id' => $id])->fetchAll();

    // dd($posts);

    foreach ($posts as $post) {
        echo "<li>" . $post['title'] . "</li>";
    }
} else {
    echo "<li>" . 'No posts available from query' . "</li>";
}
