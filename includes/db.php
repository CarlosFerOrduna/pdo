<?php

class Db {

    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;

    public function __construct() {
        $this->host = 'localhost';
        $this->db = 'survey';
        $this->user = 'root';
        $this->pass = '';
        $this->charset = 'utf8mb4';
    }

    public function connect() {
        try {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;

            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false];

            $pdo = new PDO($connection, $this->user, $this->pass, $option);
            
            return $pdo;
        } catch (PDOException $e) {
            print_r("Error connection: " . $e->getMessage());
        }
    }

}
?>