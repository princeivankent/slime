<?php

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'sys_insurance_and_registration';

    protected $connection;

    public function __construct()
    {
        if (!isset($this->connection)) {
            $this->connection = new mysqli(
                $this->host,
                $this->user,
                $this->password,
                $this->database
            );

            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }      
        }

        return $this->connection;
    }
}