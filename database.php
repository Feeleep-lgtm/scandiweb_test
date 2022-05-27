<?php

class Database
{
    private $servername = '';
    private $user = 'root';
    private $password = '';
    private $dbname = 'scandiweb_db';
    private $connection;

    public function __construct()
    {
        $this->connection = new mysqli($this->servername, $this->user, $this->password, $this->dbname);

        if ($this->connection->connect_errno) {
            echo "Failed to connect to database: " . $this->connection->connect_error;
            exit();
        }
    }

    public function getConnection(): mysqli
    {
        return $this->connection;
    }
}
