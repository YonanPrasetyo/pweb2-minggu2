    <?php include_once "../app/view/src/top.php" ?>
    <?php include_once "../app/view/src/sidebar.php" ?> <!-- Sidebar -->

    

    <!-- Cent Start -->
    
    <div class="container p-10">

            <h1 class="text-2xl pb-6 font-bold">Daftar Product</h1>

            <a href="/product/create" class="btn btn-primary mb-6">Tambah Product</a>
            
            <!-- notif start -->
            <?php if (isset($_SESSION['flash_message'])) : ?>
            <div role="alert" class="alert alert-success">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 shrink-0 stroke-current"
                    fill="none"
                    viewBox="0 0 24 24">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span><?= $_SESSION['flash_message']; ?></span>
                <?php unset($_SESSION['flash_message']) ?>
            </div>
            <?php endif; ?>
            <!-- notif end -->

            <div class="grid gap-4 grid-cols-1 lg:grid-cols-3 sm:grid-cols-2 mt-4">
                <?php $no=1; foreach ($products as $product) : ?>

                    <div class="card rounded- border border-black border-solid w-full bg-base-100">
                        <div class="card-body p-6 bg-primary-100">
                            <div class="badge font-semibold badge-primary badge-outline"><?=$product['Kategori_Produk']?></div>
                            <h1 class="card-title text-2xl  font-serif "><?=$product['Nama']?></h1>
                            <p class="text-base-content mt-4"><?=$product['Deskripsi']?></p>
                            <div class="card-actions justify-between mt-4">
                                <div>Rp. <?= $product['Harga']; ?></div>
                                <div>
                                    <a href="/product/edit/<?= $product['ID_Produk']; ?>" class="btn btn-outline btn-warning">Edit</a>
                                    <a href="javascript:void(0)" onclick="showAlert('<?= $product['ID_Produk']; ?>')" class="btn btn-outline btn-error ">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
<!-- Content End -->

<!-- alert start -->
<div id="deleteAlert" class="toast toast-center toast-middle z-50 hidden">
    <div class="alert alert-base-300 shadow-lg shadow-blue-500/50">
        <div class="flex flex-col">
            <span>Apakaah Anda yakin ingin menghapus data ini?</span>
                <div class="flex gap-4 mt-4 justify-center">
                    <a href="/product/delete/<?= $product['ID_Produk']; ?>" class="btn btn-error">Hapus</a>
                    <a href="" class="btn btn-success">Batal</a>
                </div>
            </div>
        </div>
    </div>
<!-- alert end -->

<script>
    // Fungsi untuk menampilkan alert konfirmasi hapus
    function showAlert(productId) {
        const deleteAlert = document.getElementById('deleteAlert');
        deleteAlert.classList.remove('hidden');
    }

    // Fungsi untuk menutup alert konfirmasi hapus
    function closeAlert() {
        const deleteAlert = document.getElementById('deleteAlert');
        deleteAlert.classList.add('hidden');
    }
</script>

<?php include_once "../app/view/src/bottom.php" ?>