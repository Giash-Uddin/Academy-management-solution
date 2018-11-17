<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
class Connection{
    private $host = "localhost:3306";
    private $user = "root";
    private $password = "1234";
    private $database = "test";
    private $conn;

    public function Connection(){
        if(!$this->conn) {
            try {
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Connection Error." . $e->getMessage());
            }
        }
    }
    public function getConnection(){
        return $this->conn; 
    }
    public function __destruct(){
        $this->conn=null;
    }
}


