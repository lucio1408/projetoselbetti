<?php
class Database{
 
    // especificações da db
    private $host = "tcp:lucioproject.database.windows.net,1433";
    private $db_name = "api_db";
    private $username = "lucio";
    private $password = "";
    public $conn;
 
    // faz a conexao
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