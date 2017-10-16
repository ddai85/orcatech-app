<?php
class Database{
// specify your own database credentials
    private $host = "uc13jynhmkss3nve.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $db_name = "j1k9z16qah4mnmw6";
    private $username = "tpwo7wx7otuy29sx";
    private $password = "wdc7bijioq4imbn3";
    public $conn;
 
    // get the database connection
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