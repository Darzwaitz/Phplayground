<?php

require 'src/functions.php';

require 'src/Database.php';

require 'src/Response.php';

require 'src/router.php';



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