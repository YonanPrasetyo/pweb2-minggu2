<?php 
require_once '../config/database.php';

class Kategori extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllCategories()
    {
        $query = $this->conn->query("SELECT * FROM kategoriproduk");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createCategory($nama_kategori)
    {
        $query = $this->conn->prepare("INSERT INTO kategoriproduk (Kategori_Produk) VALUES (:nama_kategori)");
        $query->bindParam(':nama_kategori', $nama_kategori);
        return $query->execute();
    }

    public function getCategoryById($id)
    {
        $query = $this->conn->prepare("SELECT * FROM kategoriproduk WHERE ID_Kategori = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateCategory($id, $nama_kategori)
    {
        $query = $this->conn->prepare("UPDATE kategoriproduk SET Kategori_Produk = :Kategori_Produk WHERE ID_Kategori = :id");
        $query->bindParam(':id', $id);
        $query->bindParam(':Kategori_Produk', $nama_kategori);
        return $query->execute();
    }

    public function deleteCategory($id)
    {
        // cek apakah kateori yang akan dihapus masih digunakam pada salah satu / lebiih produk
        // jika ada, tampilkan pesan kategori tidak bisa dihapus
        
        $query = $this->conn->prepare("DELETE FROM kategoriproduk WHERE ID_Kategori = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
?>
