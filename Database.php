<?php

// connect to sql db using PDO and execute a query
class Database
{

    public $connection;

    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {

        // dsn = data source name
        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        $dsn = 'mysql:' . http_build_query($config, '', ';');


        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function fetch()
    {
        return $this->statement->fetchAll();
    }
}
