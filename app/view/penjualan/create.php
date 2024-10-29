<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Penjualan</title>
</head>
<body>
    <h1>Tambah Penjualan</h1>

    <form method="POST" action="/penjualan/store">
        <label for="Pembeli">Pembeli</label>
        <input type="text" name="Pembeli">

        <label for="ID_Produk">ID Produk</label>
        <input type="number" name="ID_Produk">

        <button type="submit">Simpan</button>
    </form>
</body>
</html>