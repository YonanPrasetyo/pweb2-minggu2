<?php 
require_once '../app/models/Product.php';
require_once '../app/models/Kategori.php';

class KategoriController {
    private $kategoriModel;
    private $productModel;

    public function __construct() {
        $this->kategoriModel = new Kategori();
        $this->productModel = new Product();
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
            $_SESSION['flash_message'] = [
                'pesan' => "Data Kategori baru telah ditambahkan", 
                'color' => "Hijau"
            ];
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
            $_SESSION['flash_message'] = [
                'pesan' => "Data Kategori Berhasil diperbarui", 
                'color' => "Hijau"
            ];
            header("Location: /kategori/index");
    }

    public function delete($id) {
        $product = $this->productModel->getProductsByCategory($id);
        if (count($product) > 0) {
            $_SESSION['flash_message'] = [
                'pesan' => "Kategori ini masih digunakan pada salah satu produk. Kategori tidak bisa dihapus.", 
                'color' => "Merah" 
            ];
            header("Location: /kategori/index");
        }else{
            $this->kategoriModel->deleteCategory($id);
            $_SESSION['flash_message'] = [
                'pesan' => "Data Kategori Berhasil Dihapus", 
                'color' => "Hijau"
            ];
            header("Location: /kategori/index");
            exit();
        }
    }
}
?>
