<?php
class Database{
    private $host = "localhost";
    private $db_name = "php_oop_crud_level_1";
    private $username = "root";
    private $passwork = "";
    public $conn;

    //get the database connection
    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host. ";dbname=" . $this->db_name,$this->username,$this->passwork);
        }catch (PDOException $e){
            echo "Connection error : ". $e->getMessage();
        }

        return $this->conn;
    }
}