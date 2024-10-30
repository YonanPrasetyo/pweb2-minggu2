<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori Baru</title>
</head>
<body>
    <h1>Tambah Kategori Baru</h1>
    <form method="POST" action="/kategori/store">
        <label for="Kategori_Produk">Nama Kategori:</label>
        <input type="text" id="Kategori_Produk" name="Kategori_Produk" required>
        <button type="submit">Simpan</button>
    </form>
    <a href="/kategori/index">Kembali ke Daftar Kategori</a>
</body>
</html>
