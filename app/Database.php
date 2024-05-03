<?php

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbid = 'database';

    protected $db;
    protected function __construct()
    {
        return $this->db = mysqli_connect($this->host, $this->user, $this->pass, $this->dbid);
    }
}
