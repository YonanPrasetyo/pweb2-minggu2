<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Pruduk</title>
</head>
<body>
    <h1>Edit Produk</h1>

    <form method="POST" action="/product/update">
            
        <input type="hidden" name="ID_Produk" value="<?= $product['ID_Produk']; ?>">

        <label for="Nama">Nama Produk:</label>
        <input type="text" name="Nama" value="<?= $product['Nama']; ?>">

        <label for="Deskripsi">Deskripsi Produk</label>
        <input type="text" name="Deskripsi" value="<?= $product['Deskripsi']; ?>">

        <label for="Harga">Harga Produk</label>
        <input type="number" name="Harga" value="<?= $product['Harga']; ?>">

        <label for="ID_kategori">Kategori Produk</label>
        <input type="text" name="ID_kategori" value="<?= $product['ID_kategori']; ?>">

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
