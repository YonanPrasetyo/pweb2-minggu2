<?php 
require_once '../config/database.php';

class Penjualan extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllPenjualan()
    {
        $query = $this->conn->query("SELECT * FROM penjualanproduk JOIN dataproduk ON penjualanproduk.ID_Produk = dataproduk.ID_Produk");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createPenjualan()
    {
        $query = $this->conn->query("   INSERT INTO penjualanproduk(Pembeli, Jumlah, Total_Harga, ID_Produk) 
                                        VALUES ('$_POST[Pembeli]', '$_POST[Jumlah]', '$_POST[Total_Harga]', '$_POST[ID_Produk]')");
        return $query;
    }

    public function getPenjualanById($id)
    {
        $query = $this->conn->query("SELECT * FROM penjualanproduk WHERE ID_Penjualan = '$id'");
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updatePenjualan()
    {
        $query = $this->conn->query("UPDATE penjualanproduk SET Pembeli='$_POST[Pembeli]', Jumlah='$_POST[Jumlah]', Total_Harga='$_POST[Total_Harga]', ID_Produk='$_POST[ID_Produk]' WHERE ID_Penjualan='$_POST[ID_Penjualan]'");
        return $query;
    }


    public function deletePenjualan($id)
    {
        $query = $this->conn->query("DELETE FROM penjualanproduk WHERE ID_Penjualan = '$id'");
        return $query;
    }

    public function getPenjualanByProduct($id)
    {
        $query = $this->conn->query("SELECT * FROM penjualanproduk WHERE ID_Produk = '$id'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>