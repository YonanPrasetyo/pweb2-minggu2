<?php 
require_once '../app/models/Kategori.php';

class KategoriController {
    private $kategoriModel;

    public function __construct() {
        $this->kategoriModel = new Kategori();
    }

    public function index() {
        $kategori = $this->kategoriModel->getAllCategories();
        require_once '../app/view/kategori/index.php';
    }

    public function create() {
        require_once '../app/view/kategori/create.php';
    }

    public function store() {
        if (isset($_POST['Kategori_Produk'])) {
            $this->kategoriModel->createCategory($_POST['Kategori_Produk']);
            header("Location: /kategori/index");
            exit();
        }
    }

    public function edit($id) {
        $kategori = $this->kategoriModel->getCategoryById($id);
        require_once '../app/view/kategori/edit.php';
    }

    public function update() {
            $this->kategoriModel->updateCategory($_POST['ID_Kategori'], $_POST['Kategori_Produk']);
            header("Location: /kategori/index");
    }

    public function delete($id) {
        $this->kategoriModel->deleteCategory($id);
        header("Location: /kategori/index");
        exit();
    }
}
?>
