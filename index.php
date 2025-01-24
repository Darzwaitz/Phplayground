<?php

require 'functions.php';

require 'router.php';

// connect to sql db using PDO and execute a query

class Database
{
    public function query($query)
    {
        $dsn = "mysql:host=localhost;port=3306;user=root;dbname=phplayground;charset=utf8mb4";

        $pdo = new PDO($dsn);

        $statement = $pdo->prepare($query);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database();

$posts = $db->query("SELECT * FROM `posts`");



// dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
