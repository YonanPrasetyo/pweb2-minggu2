<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    <a href="/product/create">Tambah Product</a>
    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($products as $product) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $product['Nama']; ?></td>
                    <td><?= $product['Deskripsi']; ?></td>
                    <td><?= $product['Harga']; ?></td>
                    <td><?= $product['ID_kategori']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>