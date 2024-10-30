<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>

    <form method="POST" action="/product/store">
        <label for="Nama">Nama Produk:</label>
        <input type="text" name="Nama">

        <label for="Deskripsi">Deskripsi Produk</label>
        <input type="text" name="Deskripsi">

        <label for="Harga">Harga Produk</label>
        <input type="number" name="Harga">

        <label for="ID_kategori">Kategori Produk</label>
        <input type="text" name="ID_kategori">

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
