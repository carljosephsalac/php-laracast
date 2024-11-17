<?php

class Database {
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1;port=3306;dbname=php_laracast;charset=utf8mb4";
        $user = 'root';
        $this->connection = new PDO($dsn, $user);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}