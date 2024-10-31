<?php 
require_once '../app/models/Product.php';
require_once '../app/models/Kategori.php';
require_once '../app/models/Stock.php';
require_once '../app/models/Penjualan.php';

class HomeController {

    private $productModel;
    private $kategoriModel;
    private $stockModel;
    private $penjualanModel;

    public function __construct() {
        $this->productModel = new Product();
        $this->kategoriModel = new Kategori();
        $this->stockModel = new Stock();
        $this->penjualanModel = new Penjualan();
    }

    public function index() {
        $products = $this->productModel->getAllProducts();
        $kategori = $this->kategoriModel->getAllCategories();
        $penjualan = $this->penjualanModel->getAllPenjualan();
        $stock = $this->stockModel->readAll();

        $jumlahproduct = count($products);
        $jumlahkategori = count($kategori);
        $jumlahpenjualan = count($penjualan);
        $jumlahstock = count($stock);

        require_once '../app/view/home/index.php';
    }
}

?>