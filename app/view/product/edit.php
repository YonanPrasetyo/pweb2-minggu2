<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Kategori</title>
</head>
<body>
    <h1>Edit Kategori</h1>

    <form method="POST" action="/kategori/update">
        <input type="hidden" name="ID_Kategori" value="<?= $kategori['ID_Kategori']; ?>">

        <label for="Kategori_Produk">Nama Kategori:</label>
        <input type="text" name="Kategori_Produk" value="<?= $kategori['Kategori_Produk']; ?>" required>

        <button type="submit">Simpan</button>
    </form>

    <a href="/kategori">Kembali ke Daftar Kategori</a>
</body>
</html>
