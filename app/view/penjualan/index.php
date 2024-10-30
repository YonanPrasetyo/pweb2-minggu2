<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
</head>
<body>
    <h1>Daftar Penjualan</h1>
    <a href="/penjualan/create">Tambah Data Penjualan</a>
    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>Pembeli</th>
                <th>ID produk</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($penjualan as $row) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['Pembeli']; ?></td>
                    <td><?= $row['ID_Produk']; ?></td>
                    <td>
                        <a href="/penjualan/edit/<?= $row['ID_Penjualan']; ?>">Edit</a>
                        <a href="/penjualan/delete/<?= $row['ID_Penjualan']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>