<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';
// dd(BASE_PATH);

require base_path('Database.php');

require base_path('Response.php');

require base_path('router.php');



// if ($_GET) {

// $id = $_GET['id'];
// $query = "SELECT * FROM `posts` where id = :id";

// // :: is scope resolution operator
// $posts = $db->query($query, [':id' => $id])->fetchAll();

// // dd($posts);

// foreach ($posts as $post) {
// echo "<li>" . $post['title'] . "</li>";
// }
// } else {
// echo "<li>" . 'No posts available from query' . "</li>";
// }