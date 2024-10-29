<?php 

class database{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "db_login";
    protected $conn;


    public function __construct(){
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
}

?>