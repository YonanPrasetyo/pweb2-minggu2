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
        $query = $this->conn->query("SELECT * FROM dataproduk JOIN kategoriproduk ON dataproduk.ID_Kategori = kategoriproduk.ID_Kategori");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createProduct()
    {
        $query = $this->conn->query("INSERT INTO dataproduk(Nama, Deskripsi, Harga, ID_Kategori) VALUES ('$_POST[Nama]', '$_POST[Deskripsi]', '$_POST[Harga]', '$_POST[ID_Kategori]')");
        return $query;
    }

    public function getProductById($id)
    {
        $query = $this->conn->query("SELECT * FROM dataproduk WHERE ID_Produk = '$id'");
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProduct()
    {
        $query = $this->conn->query("UPDATE dataproduk SET Nama='$_POST[Nama]', Deskripsi='$_POST[Deskripsi]', Harga='$_POST[Harga]', ID_Kategori='$_POST[ID_Kategori]' WHERE ID_Produk='$_POST[ID_Produk]'");
        return $query;
    }

    public function deleteProduct($id)
    {
        $query = $this->conn->query("DELETE FROM dataproduk WHERE ID_Produk = '$id'");
        return $query;
    }
}
?>