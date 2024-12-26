<?php

namespace Core;

use PDO;

class Database {
    public $connection;
    public $statement; // declared as a class property in able to use in other method

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $param)
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($param);

        return $this; // return the object or instance in able to use chain methods
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }
}