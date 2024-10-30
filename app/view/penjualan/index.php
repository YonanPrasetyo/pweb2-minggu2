<?php include_once "../app/view/src/top.php" ?>
<?php include_once "../app/view/src/sidebar.php" ?> <!-- Sidebar -->
<!-- content start -->
<div class="container p-10">
    <h1 class="text-2xl pb-6 font-bold">Daftar Penjualan</h1>
    <a href="/penjualan/create" class="btn btn-primary">Tambah Data Penjualan</a>
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
                            <a href="/penjualan/delete/<?= $row['ID_Penjualan']; ?>" class="btn btn-outline btn-error">Hapus</a>
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

<?php include_once "../app/view/src/bottom.php" ?>