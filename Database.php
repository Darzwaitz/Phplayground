<?php

// connect to sql db using PDO and execute a query
class Database
{

    public $connection;
    public function __construct()
    {
        // dsn = data source name
        $dsn = "mysql:host=localhost;port=3306;user=root;dbname=phplayground;charset=utf8mb4";

        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {

        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}
