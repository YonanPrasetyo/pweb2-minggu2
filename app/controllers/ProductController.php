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

        echo 'index';
    }
}
?>