<?php 
require_once '../app/models/Product.php';
require_once '../app/models/Kategori.php';

class ProductController{
    private $productModel;
    private $kategoriModel;

    public function __construct(){
        $this->productModel = new Product();
        $this->kategoriModel = new Kategori();
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
        header("Location: /product/index");
    }

    public function edit($id){
        $product = $this->productModel->getProductById($id);
        $categories = $this->kategoriModel->getAllCategories();
        require_once '../app/view/product/edit.php';
    }

    public function update(){
        $this->productModel->updateProduct();
        header("Location: /product/index");
    }

    public function delete($id){
        $this->productModel->deleteProduct($id);
        header("Location: /product/index");
    }
}
?>