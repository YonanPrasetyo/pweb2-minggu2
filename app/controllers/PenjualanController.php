<?php 
require_once '../app/models/Penjualan.php';

class PenjualanController{
    private $penjualanModel;

    public function __construct(){
        $this->penjualanModel = new Penjualan();
    }

    public function index(){
        $penjualan = $this->penjualanModel->getAllPenjualan();
        require_once '../app/view/penjualan/index.php';
    }

    public function create(){
        require_once '../app/view/penjualan/create.php';
    }

    public function store(){
        $this->penjualanModel->createPenjualan();
        header("Location: /penjualan/index");
    }
    public function edit($id){
        $penjualan = $this->penjualanModel->getPenjualanById($id);
        require_once '../app/view/penjualan/edit.php';
    }

    public function update(){
        $this->penjualanModel->updatePenjualan();
        header("Location: /penjualan/index");
    }

    public function delete($id){
        $this->penjualanModel->deletePenjualan($id);
        header("Location: /penjualan/index");
    }
}
?>