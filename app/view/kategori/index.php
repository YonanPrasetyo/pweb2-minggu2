<?php include_once "../app/view/src/top.php" ?>
<?php include_once "../app/view/src/sidebar.php" ?>
<div class="container p-10">

    <h1 class="text-2xl pb-6 font-bold">Daftar Kategori Produk</h1>
    <a href="/kategori/create" class="btn btn-primary">Tambah Kategori</a>
    <div class="overflow-x-auto pt-6">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $No = 1; foreach ($kategori as $row): ?>
                    <tr>
                        <td><?= $No++ ?></td>
                        <td><p class="badge font-semibold badge-primary badge-outline"><?= $row['Kategori_Produk'] ?></p></td>
                        <td>
                            <a href="/kategori/edit/<?= $row['ID_Kategori'] ?>" class="btn btn-outline btn-warning">Edit</a>
                            <a href="/kategori/delete/<?= $row['ID_Kategori'] ?>" class="btn btn-outline btn-error">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "../app/view/src/bottom.php" ?>