<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori Produk</title>
</head>
<body>
<h1>Daftar Kategori Produk</h1>
<a href="/kategori/create">Tambah Kategori</a>
<table border="1" >
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
                <td><?= $row['Kategori_Produk'] ?></td>
                <td>
                    <a href="/kategori/edit/<?= $row['ID_Kategori'] ?>">Ubah</a>
                    <a href="/kategori/delete/<?= $row['ID_Kategori'] ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>