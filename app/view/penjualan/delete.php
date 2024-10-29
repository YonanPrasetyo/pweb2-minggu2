<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hapus Penjualan</title>
</head>
<body>
    <h1>Hapus Penjualan</h1>

    <form method="POST" action="/penjualan/delete">
    <label for="Pembeli">Pembeli:</label>
    <input type="text" name="Pembeli" value="<?= $penjualan['Pembeli']; ?>">

    <label for="ID_Produk">ID Produk</label>
    <input type="text" name="ID_Produk" value="<?= $penjualan['ID_Produk']; ?>">

    <button type="submit">Simpan</button>
</form>
</body>
</html>