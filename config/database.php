<?php
class database {
    private $host = 'mdi.my.id';
    private $db_name = 'basdeat2_klp5';
    private $username = 'basdeat2_usr5';
    private $password = '&uD%b?8AqWl8(Z)kOl';
    protected $conn;

    public function __construct() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
    }
}
