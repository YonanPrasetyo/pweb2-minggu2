<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Kategori</title>
</head>
<body>
<h1>Ubah Kategori</h1>
<form method="POST" action="/kategori/update">
    <input type="hidden" name="ID_Kategori" value="<?=$kategori['ID_Kategori']?>">
    <label for="Kategori_Produk">Nama Kategori:</label>
    <input type="text" id="Kategori_Produk" name="Kategori_Produk" value="<?=$kategori['Kategori_Produk']?>" required>
    <button type="submit">Simpan Perubahan</button>
</form>
</body>
</html>