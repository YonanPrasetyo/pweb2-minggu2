<?php include_once "../app/view/src/top.php" ?>
<?php include_once "../app/view/src/sidebar.php" ?>
<div class="container p-10">
    <h1 class="text-2xl pb-6 font-bold">LIST STOCK PRODUK</h1>
    <a href="/stock/tambah" class="btn btn-primary">Tambah Stok Baru</a>
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
                        <a href="/stock/hapus/<?= $stock['ID_Stock_Produk']; ?>" class="btn btn-outline btn-error">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "../app/view/src/bottom.php" ?>