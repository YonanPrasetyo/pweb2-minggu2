<?php 
require_once '../config/database.php';

class Product extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProducts()
    {
        $query = $this->conn->query("SELECT * FROM dataproduk");
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }


}
?>