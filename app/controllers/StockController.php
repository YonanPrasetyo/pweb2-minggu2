<?php
require_once '../app/models/Stock.php';
require_once '../app/models/Product.php';

class StockController {
    private $model;
    private $productModel;

    public function __construct() {
        $this->model = new Stock();
        $this->productModel = new Product();
    }

    public function stock() {
        $stocks = $this->model->readAll();
        require '../app/view/stock/index.php';
    }

    public function tambah() {
        $products = $this->productModel->getAllProducts();
        require '../app/view/stock/tambah.php';
    }
    
    public function simpan($data){
        $this->model->tambah($data['ID_Produk'], $data['Jumlah_Stock']);
        $_SESSION['flash_message'] = "Data Stok telah ditambahkan";
        header("Location: /stock/index");

    }

    public function edit($ID_Stock_Produk) {
        $stock = $this->model->readOne($ID_Stock_Produk);
        $products = $this->productModel->getAllProducts();
        require '../app/view/stock/update.php';
    }

    public function update($data) {
            $this->model->update($data['ID_Stock_Produk'], $data['ID_Produk'], $data['Jumlah_Stock']);
            $_SESSION['flash_message'] = "Data Berhasil diperbarui";
            header("Location: /stock/index");
    }

    public function hapus($ID_Stock_Produk) {
        $this->model->hapus($ID_Stock_Produk);
        $_SESSION['flash_message'] = "Data Berhasil Dihapus";   
        header("Location: /stock/index");
    }

    public function tampil($ID_Stock_Produk) {
        $stock = $this->model->readOne($ID_Stock_Produk);
        require '../app/view/stock/index.php';
    }
}
?>