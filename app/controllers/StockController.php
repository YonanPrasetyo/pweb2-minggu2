<?php
require_once '../app/models/Stock.php';

class StockController {
    private $model;

    public function __construct() {
        $this->model = new Stock();
    }

    public function stock() {
        $stocks = $this->model->readAll();
        require '../app/view/stock/index.php';
    }

    public function tambah($data) {
        if (isset($data['submit'])) {
            $this->model->tambah($data['ID_Produk'], $data['Jumlah_Stock']);
            header("Location: /stock/index");
        }
        require '../app/view/stock/tambah.php';
    }

    public function edit($ID_Stock_Produk) {
        $stock = $this->model->readOne($ID_Stock_Produk);
        require '../app/view/stock/update.php';
    }

    public function update($data) {
            $this->model->update($data['ID_Stock_Produk'], $data['ID_Produk'], $data['Jumlah_Stock']);
            header("Location: /stock/index");
    }

    public function hapus($ID_Stock_Produk) {
        $this->model->hapus($ID_Stock_Produk);
        header("Location: /stock/index");
    }

    public function tampil($ID_Stock_Produk) {
        $stock = $this->model->readOne($ID_Stock_Produk);
        require '../app/view/stock/index.php';
    }
}
?>