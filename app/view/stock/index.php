<?php include_once "../app/view/src/top.php" ?>
<?php include_once "../app/view/src/sidebar.php" ?>
<div class="container p-10">
    <h1 class="text-2xl pb-6 font-bold">LIST STOCK PRODUK</h1>
    <a href="/stock/tambah" class="btn btn-primary mb-6">Tambah Stok Baru</a>
    <?php include_once "../app/view/src/notif.php" ?>
    <div class="overflow-x-auto pt-6">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Jumlah_Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $No = 1; foreach ($stocks as $stock): ?>
                <tr>
                    <td><?= $No++ ?></td>
                    <td><?= $stock['Nama'] ?></td>
                    <td><?= $stock['Jumlah_Stock'] ?></td>
                    <td>
                        <a href="/stock/edit/<?= $stock['ID_Stock_Produk'] ?>" class="btn btn-outline btn-warning">Edit</a>
                        <a href="javascript:void(0)" onclick="showAlert(<?= $stock['ID_Stock_Produk']; ?>)" class="btn btn-outline btn-error">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- alert start -->
<div id="deleteAlert" class="toast toast-center toast-middle z-50 hidden">
    <div class="alert alert-base-300 shadow-lg shadow-blue-500/50">
        <div class="flex flex-col">
            <span>Apakaah Anda yakin ingin menghapus data ini?</span>
                <div class="flex gap-4 mt-4 justify-center">
                    <a id="confirmDeleteBtn" href="#" class="btn btn-error">Hapus</a>
                    <a onclick="closeAlert()" class="btn btn-success">Batal</a>
                </div>
            </div>
        </div>
    </div>
<!-- alert end -->


<script>
    // Fungsi untuk menampilkan alert konfirmasi hapus
    function showAlert($id) {
        const deleteAlert = document.getElementById('deleteAlert');
        deleteAlert.classList.remove('hidden');
        const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
        confirmDeleteBtn.setAttribute('href', '/stock/delete/' + $id);
    }

    // Fungsi untuk menutup alert konfirmasi hapus
    function closeAlert() {
        const deleteAlert = document.getElementById('deleteAlert');
        deleteAlert.classList.add('hidden');
    }
</script>
<?php include_once "../app/view/src/bottom.php" ?>