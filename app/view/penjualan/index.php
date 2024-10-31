<?php include_once "../app/view/src/top.php" ?>
<?php include_once "../app/view/src/sidebar.php" ?> <!-- Sidebar -->
<!-- content start -->
<div class="container p-10">
    <h1 class="text-2xl pb-6 font-bold">Daftar Penjualan</h1>
    <a href="/penjualan/create" class="btn btn-primary mb-6">Tambah Data Penjualan</a>
    <?php include_once "../app/view/src/notif.php" ?>
    <div class="overflow-x-autop pt-6">
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Pembeli</th>
                    <th>Nama Produk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach ($penjualan as $row) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['Pembeli']; ?></td>
                        <td><?= $row['Nama']; ?></td>
                        <td>
                            <a href="/penjualan/edit/<?= $row['ID_Penjualan']; ?>" class="btn btn-outline btn-warning">Edit</a>
                            <a href="javascript:void(0)" onclick="showAlert()" class="btn btn-outline btn-error">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- content end -->
</body>
</html>

<!-- alert start -->
<div id="deleteAlert" class="toast toast-center toast-middle z-50 hidden">
    <div class="alert alert-base-300 shadow-lg shadow-blue-500/50">
        <div class="flex flex-col">
            <span>Apakaah Anda yakin ingin menghapus data ini?</span>
                <div class="flex gap-4 mt-4 justify-center">
                    <a href="/penjualan/delete/<?= $row['ID_Penjualan']; ?>" class="btn btn-error">Hapus</a>
                    <a onclick="closeAlert()" class="btn btn-success">Batal</a>
                </div>
            </div>
        </div>
    </div>
<!-- alert end -->

<?php include_once "../app/view/src/alert.php" ?>

<?php include_once "../app/view/src/bottom.php" ?>