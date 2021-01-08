<?php

class Dbh {

    private $host = 'sba006-1.mysql.database.azure.com';
    private $username = 'sberkan09';
    private $pwd = 'EtuSami006';
    private $dbname = 'test';

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
