<?php 
require_once '../app/models/Product.php';

class ProductController{
    private $productModel;

    public function __construct(){
        $this->productModel = new Product();
    }

    public function index(){
        $products = $this->productModel->getAllProducts();
        require_once '../app/view/product/index.php';
    }

    public function create(){
        require_once '../app/view/product/create.php';
    }

    public function store(){
        $this->productModel->createProduct();
        header("Location: /product");
    }

    public function edit($id){
        $product = $this->productModel->getProductById($id);
        require_once '../app/view/product/edit.php';
    }

    public function update(){
        $this->productModel->updateProduct();
        header("Location: /product");
    }
}
?>