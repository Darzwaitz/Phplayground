<?php

require 'functions.php';

require 'router.php';


// connect to sql db using PDO

$dsn = "mysql:host=localhost;port=3000;dbname=phplayground;charset=utf8mb4";

$pdo = new PDO($dsn);
