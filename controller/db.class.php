<?php 

class DB {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'pzi';

    private $connection;

    public function __construct(){
        $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection(){
        return $this->connection;
    }
}

?>