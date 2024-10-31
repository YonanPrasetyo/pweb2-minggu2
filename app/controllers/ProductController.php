<?php 
require_once '../app/models/Product.php';
require_once '../app/models/Kategori.php';
require_once '../app/models/Stock.php';
require_once '../app/models/Penjualan.php';

class ProductController{
    private $productModel;
    private $kategoriModel;
    private $stockModel;
    private $penjualanModel;

    public function __construct(){
        $this->productModel = new Product();
        $this->kategoriModel = new Kategori();
        $this->stockModel = new Stock();
        $this->penjualanModel = new Penjualan();
    }

    public function index(){
        $products = $this->productModel->getAllProducts();
        require_once '../app/view/product/index.php';
    }

    public function create(){
        $categories = $this->kategoriModel->getAllCategories();
        require_once '../app/view/product/create.php';
    }

    public function store(){
        $this->productModel->createProduct();
        $_SESSION['flash_message'] = [
            'pesan' => "Data Produk baru telah ditambahkan", 
            'color' => "Hijau"
        ];
        header("Location: /product/index");
        exit;
    }

    public function edit($id){
        $product = $this->productModel->getProductById($id);
        $_SESSION['flash_message'] = [
            'pesan' => "Data Produk ".$product['Nama']." telah diperbarui", 
            'color' => "Hijau"
        ];
        $categories = $this->kategoriModel->getAllCategories();
        require_once '../app/view/product/edit.php';
    }

    public function update(){
        $this->productModel->updateProduct();
        header("Location: /product/index");
    }

    public function delete($id){
        $product = $this->productModel->getProductById($id);
        $stock = $this->stockModel->getStockByProduct($id);
        $penjualan = $this->penjualanModel->getPenjualanByProduct($id);

        if (count($stock) > 0 || count($penjualan) > 0) {
            $_SESSION['flash_message'] = "Data produk ".$product['Nama']." gagal dihapus, karena masih digunakan di tabel lain";
            $_SESSION['flash_message'] = [
                'pesan' => "Data Produk ".$product['Nama']." gagal dihapus, karena masih digunakan di tabel lain", 
                'color' => "Merah"
            ];
            header("Location: /product/index");
            exit;
        }else {
            $this->productModel->deleteProduct($id);
            $_SESSION['flash_message'] = "Data produk ".$product['Nama']." telah dihapus";
            $_SESSION['flash_message'] = [
                'pesan' => "Data Produk ".$product['Nama']." telah dihapus", 
                'color' => "Hijau"
            ];
            header("Location: /product/index");
        }
    }
}
?>