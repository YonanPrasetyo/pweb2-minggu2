<?php
require_once '../app/models/Stock.php';

class StockController {
    private $model;

    public function __construct() {
        $this->model = new Stock();
    }


    public function stock() {
        $stocks = $this->model->readAll();
        require '../app/view/stock/stock.php';
    }

    public function tambah($data) {
        if (isset($data['submit'])) {
            $this->model->tambah($data['ID_Stock_Produk'], $data['ID_Produk'], $data['Jumlah_Stock']);
            header("Location: /stock/index");
        }
        require '../app/view/stock/tambah.php';
    }

    public function update($ID_Stock_Produk, $data) {
        $product = $this->model->readOne($id);
        if (isset($data['submit'])) {
            $this->model->update($ID_Stock_Produk, $data['ID_Stock_Produk'], $data['Jumlah_Stock']);
            header("Location: stock.php");
        }
        require 'views/stock/update.php';
    }

    public function hapus($ID_Stock_Produk) {
        $this->model->delete($ID_Stock_Produk);
        header("Location: stock.php");
    }

    public function tampil($ID_Stock_Produk) {
        $product = $this->model->readOne($ID_Stock_Produk);
        require 'views/stock.php';
    }
}
?>