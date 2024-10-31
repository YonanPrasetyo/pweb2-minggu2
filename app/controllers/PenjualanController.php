<?php 
require_once '../app/models/Penjualan.php';
require_once '../app/models/Product.php';
require_once '../app/models/Stock.php';

class PenjualanController{
    private $penjualanModel;
    private $produkModel;
    private $stockModel;
    
    public function __construct(){
        $this->penjualanModel = new Penjualan();
        $this->produkModel = new Product();
        $this->stockModel = new Stock();
    }

    public function index(){
        $penjualan = $this->penjualanModel->getAllPenjualan();
        require_once '../app/view/penjualan/index.php';
    }

    public function create(){
        $produk = $this->produkModel->getAllProducts();
        require_once '../app/view/penjualan/create.php';
    }

    public function store(){
        $stock = $this->stockModel->getStockByProduct($_POST['ID_Produk']);
        if ($stock[0]['Jumlah_Stock'] < $_POST['Jumlah'] || !isset($stock[0]['Jumlah_Stock'])) {
            $_SESSION['flash_message'] = [
                'pesan' => "Jumlah yang diinputkan melebihi stock yang tersedia",
                'color' => "Merah"
            ];
            header("Location: /penjualan/index");
            return;
        }else {
            $_POST['Total_Harga'] = $this->produkModel->getProductById($_POST['ID_Produk'])['Harga'] * $_POST['Jumlah'];
            $stock = $stock[0]['Jumlah_Stock'] - $_POST['Jumlah'];
            $this->stockModel->penguranganStock($_POST['ID_Produk'], $stock);
            $this->penjualanModel->createPenjualan();
            $_SESSION['flash_message'] = [
                'pesan' => "Data penjualan baru telah ditambahkan",
                'color' => "Hijau"
            ];
            header("Location: /penjualan/index");
        }
    }

    public function edit($id){
        $produk = $this->produkModel->getAllProducts();
        $penjualan = $this->penjualanModel->getPenjualanById($id);
        require_once '../app/view/penjualan/edit.php';
    }

    public function update(){
        $jumlahBeliSebelum = $this->penjualanModel->getPenjualanById($_POST['ID_Penjualan'])['Jumlah'];
        $selisihJumalh = $_POST['Jumlah'] - $jumlahBeliSebelum;
        $stock = $this->stockModel->getStockByProduct($_POST['ID_Produk']);
        if ($selisihJumalh > $stock[0]['Jumlah_Stock']) {
            $_SESSION['flash_message'] = [
                'pesan' => "Jumlah yang diinputkan melebihi stock yang tersedia",
                'color' => "Merah"
            ];
            header("Location: /penjualan/index");
            return;
        }else {
            $_POST['Total_Harga'] = $this->produkModel->getProductById($_POST['ID_Produk'])['Harga'] * $_POST['Jumlah'];
            $stockSetelah = $stock[0]['Jumlah_Stock'] - $selisihJumalh;
            $this->stockModel->penguranganStock($_POST['ID_Produk'], $stockSetelah);
            $this->penjualanModel->updatePenjualan();
            $_SESSION['flash_message'] = [
                'pesan' => "Data penjualan berasil diperbarui",
                'color' => "Hijau"
            ];
            header("Location: /penjualan/index");
        }
    }

    public function delete($id){
        $this->penjualanModel->deletePenjualan($id);
        $_SESSION['flash_message'] = [
            'pesan' => "Data Berhasil Dihapus",
            'color' => "Hijau"
        ];
        header("Location: /penjualan/index");
    }
}
?>