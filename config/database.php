<?php


class Database{
 
    
    //Change this area with your Server credentials
    private $host = "localhost";
    private $db_name = "restapi";
    private $username = "root";
    private $password = ""; //empty
    public $conn;
    //STOP EDITING ABOVE THIS LINE
    
    
    // myRESTAPI database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}


?>