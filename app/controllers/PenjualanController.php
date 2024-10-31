<?php 
require_once '../app/models/Penjualan.php';
require_once '../app/models/Product.php';
class PenjualanController{
    private $penjualanModel;
    private $produkModel;
    public function __construct(){
        $this->penjualanModel = new Penjualan();
        $this->produkModel = new Product();
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
        $this->penjualanModel->createPenjualan();
        $_SESSION['flash_message'] = [
            'pesan' => "Data penjualan baru telah ditambahkan",
            'color' => "Hijau"
        ];
        header("Location: /penjualan/index");
    }
    public function edit($id){
        $produk = $this->produkModel->getAllProducts();
        $penjualan = $this->penjualanModel->getPenjualanById($id);
        require_once '../app/view/penjualan/edit.php';
    }

    public function update(){
        $this->penjualanModel->updatePenjualan();
        $_SESSION['flash_message'] = [
            'pesan' => "Data penjualan berasil diperbarui",
            'color' => "Hijau"
        ];
        header("Location: /penjualan/index");
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