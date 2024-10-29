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

    public function createProduct()
    {
        $query = $this->conn->query("INSERT INTO dataproduk(Nama, Deskripsi, Harga, ID_kategori) VALUES ('$_POST[Nama]', '$_POST[Deskripsi]', '$_POST[Harga]', '$_POST[ID_kategori]')");
        return $query;
    }


}
?>