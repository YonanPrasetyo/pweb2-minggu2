<?php
require_once '../config/database.php';
class Stock extends Database {
    protected $conn;
    private $table = 'stockproduk';

    public function __construct() {
        parent::__construct();
    }

    public function tambah($ID_Produk, $Jumlah_Stock) {
        $query = "INSERT INTO stockproduk (ID_Produk, Jumlah_Stock) 
                  VALUES ('$ID_Produk', '$Jumlah_Stock')";
        return $this->conn->exec($query);
    }

    public function readAll() {
        $query = "SELECT * FROM stockproduk JOIN dataproduk ON stockproduk.ID_Produk = dataproduk.ID_Produk";
        $stock = $this->conn->query($query);
        return $stock->fetchAll(PDO::FETCH_ASSOC);
    }

    public function readOne($ID_Stock_Produk) {
        $query = "SELECT * FROM stockproduk WHERE ID_Stock_Produk = '$ID_Stock_Produk'";
        $stock = $this->conn->query($query);
        return $stock->fetch(PDO::FETCH_ASSOC);
    }

    public function update($ID_Stock_Produk, $ID_Produk, $Jumlah_Stock) {
        $query = "UPDATE stockproduk
                  SET ID_Produk = '$ID_Produk', Jumlah_Stock = '$Jumlah_Stock' 
                  WHERE ID_Stock_Produk = '$ID_Stock_Produk'";
        return $this->conn->exec($query);
    }

    public function hapus($ID_Stock_Produk) {
        $query = "DELETE FROM stockproduk WHERE ID_Stock_Produk = $ID_Stock_Produk";
        return $this->conn->exec($query);
    }
}
?>